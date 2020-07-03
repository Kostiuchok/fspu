<?php
class Federation extends Admin_Controller{
  
  public function __construct() {
    parent::__construct();
    $this->load->model('federation_model');
    $this->load->library('image_moo');
    $this->up_folder_tmp = 'uploads/';
    $this->up_folder_img = 'img/federation/';
   }

  public function index()
  {
    $data['title'] = 'Адміністративна частина - Участники федерації';
    $data['federation'] = $this->federation_model->get_federation_all();
    $this->load->view('admin/federation', $data);

  }

  public function add_federation()
  {
    $data['title'] = 'Адміністративна частина - Участники федерації';
    $this->load->view('admin/add_federation', $data);

  }

  public function edit($id)
  {
    $data['federation'] = $this->federation_model->get_federation($id);

    $this->load->view('admin/edit_federation', $data);

  }

  public function add(){
    $federation = "";
    $this->validation("new");
    
    if($this->form_validation->run() == TRUE) {
  
      $federation = $this->images_manage($federation);
      $this->federation_model->add_federation($federation);
      $data = array(
        'status' => '1',
        'msg' => 'Участник добавлений'
        );
      echo json_encode($data);
    }
    else {
      $this->form_validation->set_error_delimiters("<",">");
      $data = array(
        'status' => '2',
        'msg' => 'Участник не добавленний',
        'input' => $this->errors()
        );
        echo json_encode($data);
    }
 }

 public function update(){
    $federation = "";
    $this->validation("edit");
    
    if($this->form_validation->run() == TRUE) {
     $federation_id = $this->input->post('federation_id');
     $federation = $this->images_manage($federation);
     $this->federation_model->update_federation($federation, $federation_id);
     $data = array(
        'status' => '1',
        'msg' => 'Участник збереженний'
        );
        echo json_encode($data);
    }
    else {
      $this->form_validation->set_error_delimiters("<",">");
      $data = array(
        'status' => '2',
        'msg' => 'Участник не збереженний',
        'input' => $this->errors()
        );
        echo json_encode($data);
    }
 }

  private function delete_federation($id){
    $federation = $this->federation_model->get_federation($id);
    $this->federation_model->delete_federation($id);
    $home = getcwd();
    if(!empty($federation->image)){
      chdir("img/federation");
      $result = unlink($federation->image);
      $result = unlink("t_".$federation->image);
      ($result) ? $status = "ok" : die("Error");
    }
    
  }  
  
  public function delete(){
    $id = $this->input->post('id');
    $this->delete_federation($id);
    echo "ok";
    
  }

  private function del_img_tmp($img_name){
    $home = getcwd();
    chdir($this->up_folder_tmp);
    $result = unlink($img_name);
    chdir($home);
    if($result){
      $status = "ok";
    }
    else{
      die("Error");
    }
    
  }

  private function images_manage(){
    
    if($this->input->post('uploader_federation_image_tmpname')){
      $federation['image'] = $this->input->post('uploader_federation_image_tmpname');
      $this->resize_img($this->up_folder_img, $federation['image'], "200", "200");
      $this->resize_img($this->up_folder_img, $federation['image'], "50", "50", "t");
      $this->del_img_tmp($federation['image']);
    }
    else{
      $federation = '';
    }
    
    
    return $federation;
    
 }

 private function resize_img($source, $name, $w, $h, $pre = ""){
    
    if(!empty($pre)){
      $new_name = $pre."_".$name;
    }
    else{
      $new_name = $name;
    }

    $this->image_moo
         ->load($this->up_folder_tmp.$name)
         ->resize_crop($w,$h)
         ->save($source.$new_name);
    
  }

  private function validation($type){
    if($type == "new"){
      $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean|prep_for_form');  
    }
    elseif($type = "edit"){
      $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean|prep_for_form');
    }
    
    $this->form_validation->set_rules('type', 'Текст', 'trim|required|xss_clean|prep_for_form|callback_check_type');
    $this->form_validation->set_rules('address', 'Адреса', 'trim|required|xss_clean|prep_for_form');
    $this->form_validation->set_rules('tel', 'Телефон', 'trim|required|xss_clean|prep_for_form');
    $this->form_validation->set_rules('email', 'E-mail', 'trim|required|xss_clean|valid_email|prep_for_form');
    $this->form_validation->set_rules('link', 'Сайт', 'trim|required|xss_clean|prep_for_form');
    $this->form_validation->set_rules('contact', 'Контактне лице', 'trim|required|xss_clean|prep_for_form');
    $this->form_validation->set_rules('order', 'Порядок', 'trim|required|xss_clean|prep_for_form');
    
 }

 public function check_type($str){

    if($str == 'select'){
      $this->form_validation->set_message('check_type', 'Виберіть статус');
      return FALSE;
    }
    else{
      return true;
    }
 }

 private function errors(){
    $err = array(
        'title' => form_error('title'),
        'type' => form_error('type'),
        'address' => form_error('address'),
        'tel' => form_error('tel'),
        'email' => form_error('email'),
        'link' => form_error('link'),
        'contact' => form_error('contact'),
        'order' => form_error('order')

    );
    
    return $err;
 }

 public function del_img_from_federation(){
    $federation_id = $this->input->post('federation_id');
    $photo = $this->input->post('photo');
    $photo_name = $this->input->post('photo_name');
    if($photo == 'image'){
      $this->federation_model->delete_img_from_federation($federation_id,$photo);
      chdir($this->up_folder_img);  
      $result = unlink($photo_name);
      ($result) ? $data['status'] = "ok" : $data['status'] = "error";
      echo json_encode($data);  
    }
    
  }


  
  
}
?>
<?php
class Smi extends Admin_Controller{
  
  public function __construct() {
    parent::__construct();
    $this->load->model('smi_model');
    $this->load->library('image_moo');
    $this->up_folder_tmp = 'uploads/';
    $this->up_folder_img = 'img/smi/';
   }

  public function index()
  {
    $data['title'] = 'Адміністративна частина - ЗМІ';
    $data['smi'] = $this->smi_model->get_smi_all();
    $this->load->view('admin/smi', $data);

  }

  public function add_smi()
  {
    $data['title'] = 'Адміністративна частина - Добавити ЗМІ';
    //$data['smi'] = $this->smi_model->get_smi_all();

    $this->load->view('admin/add_smi', $data);

  }

  public function edit($id)
  {
    $data['smi'] = $this->smi_model->get_smi($id);

    $this->load->view('admin/edit_smi', $data);

  }

  public function add(){
    $smi = "";
    $this->validation("new");
    
    if($this->form_validation->run() == TRUE) {
  
      $smi = $this->images_manage($smi);
      $this->smi_model->add_smi($smi);
      $data = array(
        'status' => '1',
        'msg' => 'ЗМІ добавлені'
        );
      echo json_encode($data);
    }
    else {
      $this->form_validation->set_error_delimiters("<",">");
      $data = array(
        'status' => '2',
        'msg' => 'ЗМІ не добавлені',
        'input' => $this->errors()
        );
        echo json_encode($data);
    }
 }

 public function update(){
    $smi = "";
    $this->validation("edit");
    
    if($this->form_validation->run() == TRUE) {
     $smi_id = $this->input->post('smi_id');
     $smi = $this->images_manage($smi);
     $this->smi_model->update_smi($smi, $smi_id);
     $data = array(
        'status' => '1',
        'msg' => 'ЗМІ збережені'
        );
        echo json_encode($data);
    }
    else {
      $this->form_validation->set_error_delimiters("<",">");
      $data = array(
        'status' => '2',
        'msg' => 'ЗМІ не збережені',
        'input' => $this->errors()
        );
        echo json_encode($data);
    }
 }

  private function delete_smi($id){
    $smi = $this->smi_model->get_smi($id);
    $this->smi_model->delete_smi($id);
    $home = getcwd();
    if(!empty($smi->image)){
      chdir("img/smi");
      $result = unlink($smi->image);
      //$result = unlink("t_".$story->image);
      ($result) ? $status = "ok" : die("Error");
    }
    
  }  
  
  public function delete(){
    $id = $this->input->post('id');
    $this->delete_smi($id);
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
    
    if($this->input->post('uploader_smi_image_tmpname')){
      $smi['image'] = $this->input->post('uploader_smi_image_tmpname');
      $this->resize_img($this->up_folder_img, $smi['image'], "50", "50");
      //$this->resize_img($this->up_folder_img, $story['image'], "280", "195", "t");
      $this->del_img_tmp($smi['image']);
    }
    else{
      $smi = '';
    }
    
    
    return $smi;
    
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
      $this->form_validation->set_rules('title', 'Назва', 'trim|required|xss_clean|prep_for_form');  
    }
    elseif($type = "edit"){
      $this->form_validation->set_rules('title', 'Назва', 'trim|required|xss_clean|prep_for_form');
    }
    
     $this->form_validation->set_rules('link', 'Сайт', 'trim|required|xss_clean|prep_for_form');
 }

 private function errors(){
    $err = array(
        'title' => form_error('title')
    );
    
    return $err;
 }

 public function del_img_from_smi(){
    $smi_id = $this->input->post('smi_id');
    $photo = $this->input->post('photo');
    $photo_name = $this->input->post('photo_name');
    if($photo == 'image'){
      $this->smi_model->delete_img_from_smi($smi_id,$photo);
      chdir($this->up_folder_img);  
      $result = unlink($photo_name);
      ($result) ? $data['status'] = "ok" : $data['status'] = "error";
      echo json_encode($data);  
    }
    
  }
  
  
}
?>
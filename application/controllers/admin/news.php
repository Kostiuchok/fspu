<?php
class News extends Admin_Controller{
  
  public function __construct() {
    parent::__construct();
    $this->load->model('news_model');
    $this->load->model('federation_model');
    $this->load->model('smi_model');
    $this->load->library('image_moo');
    $this->up_folder_tmp = 'uploads/';
    $this->up_folder_img = 'img/news/';
   }

  public function index()
  {
    $data['title'] = 'Адміністратина частина - Новини';
    $data['news'] = $this->news_model->get_news_all();
    
    foreach ($data['news'] as $key => $item) {
      $st = explode("-", $item->source);
      if($st[0] == 'federation'){
        $fed = $this->federation_model->get_federation($st[1]);
		//echo '<pre>';
		//print_r($fed);
		//echo '</pre>';
		if(isset($fed->title))
			$data['news'][$key]->source = $fed->title;
      }
      elseif($st[0] == 'smi'){
        $smi = $this->smi_model->get_smi($st[1]);
		
		if(isset($smi->title))
			$data['news'][$key]->source = $smi->title;
      }
      else{
        die("Error");
      }
    }
    
    $this->load->view('admin/news', $data);

  }

  public function add_news()
  {
    $data['title'] = 'Адміністративна частина - Добавити новину';
    $data['source_fed'] = $this->federation_model->get_federation_all();
    $data['source_smi'] = $this->smi_model->get_smi_all();
    $this->load->view('admin/add_news', $data);

  }

  public function edit($id){
   $data['news'] = $this->news_model->get_news($id);
   $data['source_fed'] = $this->federation_model->get_federation_all();
   $data['source_smi'] = $this->smi_model->get_smi_all();
   $this->load->view('admin/edit_news', $data);
  }

  public function add(){
    $news = "";
    $this->validation("new");
    
    if($this->form_validation->run() == TRUE) {
  
      $news = $this->images_manage($news);
      $this->news_model->add_news($news);
      $data = array(
        'status' => '1',
        'msg' => 'Новина добавлена'
        );
      echo json_encode($data);
    }
    else {
      $this->form_validation->set_error_delimiters("<",">");
      $data = array(
        'status' => '2',
        'msg' => 'Новина не добавлена',
        'input' => $this->errors()
        );
        echo json_encode($data);
    }
 }

 public function update(){
    $news = "";
    $this->validation("edit");
    
    if($this->form_validation->run() == TRUE) {
     $news_id = $this->input->post('news_id');
     $news = $this->images_manage($news);
     $this->news_model->update_news($news, $news_id);
     $data = array(
        'status' => '1',
        'msg' => 'Новина збережена'
        );
        echo json_encode($data);
    }
    else {
      $this->form_validation->set_error_delimiters("<",">");
      $data = array(
        'status' => '2',
        'msg' => 'Новина не збережена',
        'input' => $this->errors()
        );
        echo json_encode($data);
    }
 }

  private function delete_news($id){
    $news = $this->news_model->get_news($id);
    $this->news_model->delete_news($id);
    $home = getcwd();
    if(!empty($news->image)){
      chdir("img/news/");
      $result = unlink($news->image);
      //$result = unlink("t_".$news->image);
      ($result) ? $status = "ok" : die("Error");
    }
    
  }  
  
  public function delete(){
    $id = $this->input->post('id');
    $this->delete_news($id);
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
    
    if($this->input->post('uploader_news_image_tmpname')){
      $news['image'] = $this->input->post('uploader_news_image_tmpname');
      $this->resize_img($this->up_folder_img, $news['image'], "365", "0");
      //$this->resize_img($this->up_folder_img, $news['image'], "280", "195", "t");
      $this->del_img_tmp($news['image']);
    }
    else{
      $news = '';
    }
    
    
    return $news;
    
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
         /*->resize_crop($w,$h)*/
         ->save($source.$new_name);
    
  }

  private function validation($type){
    if($type == "new"){
      $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean|prep_for_form');  
    }
    elseif($type = "edit"){
      $this->form_validation->set_rules('title', 'Title', 'trim|required|xss_clean|prep_for_form');
    }
    
    $this->form_validation->set_rules('text', 'Текст', 'trim|required|xss_clean|prep_for_form');
    $this->form_validation->set_rules('brif', 'Бриф', 'trim|required|xss_clean|prep_for_form');
    $this->form_validation->set_rules('date', 'Дата', 'trim|required|xss_clean');
    $this->form_validation->set_rules('source', 'Джерело', 'trim|required|xss_clean|prep_for_form|callback_check_source');
    
 }

 public function check_source($str){

    if($str == 'select'){
      $this->validation->set_message('chkeck source', 'Виберіть джерело');
      return FALSE;
    }
    else{
      return true;
    }
 }

 private function errors(){
    $err = array(
        'title' => form_error('title'),
        'text' => form_error('text'),
        'brif' => form_error('brif'),
        'date' => form_error('date'),
        'source' => form_error('source')
    );
    
    return $err;
 }

 public function del_img_from_news(){
    $news_id = $this->input->post('news_id');
    $photo = $this->input->post('photo');
    $photo_name = $this->input->post('photo_name');
    if($photo == 'image'){
      $this->news_model->delete_img_from_news($news_id,$photo);
      chdir($this->up_folder_img);  
      $result = unlink($photo_name);
      ($result) ? $data['status'] = "ok" : $data['status'] = "error";
      echo json_encode($data);  
    }
    
  }
  
  
}
?>
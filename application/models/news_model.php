<?php
class News_model extends CI_Model {
  private $table_name;

  public function __construct() {
    parent::__construct();

		$this->table_name = 'news';
  }

  public function get_news_all() {

    $result = $this->db->get($this->table_name);

    return ($result->num_rows() > 0) ? $result->result() : 0;

  }

  public function get_news($id) {

    $result = $this->db->where('id', $id)

											 ->get($this->table_name);

		return ($result->num_rows() > 0) ? $result->row() : 0;

  }

  public function get_news_order_limit($limit1, $limit2 = 0){
    
    $this->db->order_by('date DESC');
    $this->db->limit($limit1,$limit2);

    $result = $this->db->get($this->table_name);

    return ($result->num_rows() > 0) ? $result->result() : 0;
  }

  public function get_news_menu_federation(){
    
    $this->db->order_by('date DESC');
    $this->db->like('source','federation');
    $this->db->limit(2,0);

    $result = $this->db->get($this->table_name);

    return ($result->num_rows() > 0) ? $result->result() : 0;
  }

  public function get_news_by_type($type){
    
    $this->db->order_by('date DESC');
    $this->db->like('source',$type);

    $result = $this->db->get($this->table_name);

    return ($result->num_rows() > 0) ? $result->result() : 0;
  }

  public function add_news($news){

      $this->db->set('title', set_value('title'));

		  $this->db->set('text', set_value('text'));

		  $this->db->set('brif', set_value('brif'));

      $this->db->set('date', set_value('date'));

      $this->db->set('source', set_value('source'));

      if(!empty($news['image'])){
          $this->db->set('image', $news['image']);
        }
        else{
          $this->db->set('image', '');
        }

			$this->db->insert($this->table_name);

  }

  public function update_news($news, $id){
     
      $this->db->set('title', set_value('title'));

      $this->db->set('brif', set_value('brif'));

      $this->db->set('text', set_value('text'));

      $this->db->set('date', set_value('date'));

      $this->db->set('source', set_value('source'));

       if(!empty($news['image'])){
          $this->db->set('image', $news['image']);
        }
       

			$this->db->where('id',$id)->update($this->table_name);
      

    }

    public function delete_news($id){

		  if(!empty($id)){$this->db->where('id',$id)->delete($this->table_name);}

    }

    public function delete_img_from_news($id,$photo){

      if(!empty($id) && !empty($photo)){$this->db->update($this->table_name,array($photo => ''),array('id'=>$id));}

    }

}
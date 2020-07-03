<?php
class Federation_model extends CI_Model {
  private $table_name;

  public function __construct() {
    parent::__construct();

    $this->table_name = 'federation';
  }

  public function get_federation_all() {

    $result = $this->db->order_by('order','asc')->get($this->table_name);

    return ($result->num_rows() > 0) ? $result->result() : 0;

  }

  public function get_federation($id) {

    $result = $this->db->where('id', $id)

                       ->get($this->table_name);

    return ($result->num_rows() > 0) ? $result->row() : 0;

  }

  public function get_federation_limit($limit1,$limit2 = 0) {

    $result = $this->db->order_by('order','asc')->limit($limit1,$limit2)->get($this->table_name);

    return ($result->num_rows() > 0) ? $result->result() : 0;

  }

  public function add_federation($federation){

      $this->db->set('title', set_value('title'));

      $this->db->set('type', set_value('type'));

      $this->db->set('address', set_value('address'));

      $this->db->set('tel', set_value('tel'));

      $this->db->set('email', set_value('email'));

      $this->db->set('link', set_value('link'));

      $this->db->set('contact', set_value('contact'));

      $this->db->set('image', $federation['image']);

      $this->db->set('order', set_value('order'));

      $this->db->insert($this->table_name);

  }

  public function update_federation($federation, $id){

      $this->db->set('title', set_value('title'));

      $this->db->set('type', set_value('type'));

      $this->db->set('address', set_value('address'));

      $this->db->set('tel', set_value('tel'));

      $this->db->set('email', set_value('email'));

      $this->db->set('link', set_value('link'));

      $this->db->set('contact', set_value('contact'));

      if(!empty($federation['image'])) $this->db->set('image', $federation['image']);

      $this->db->set('order', set_value('order'));

      $this->db->where('id',$id)->update($this->table_name);

    }

    public function delete_federation($id){

      if(!empty($id)){$this->db->where('id',$id)->delete($this->table_name);}

    }

    public function delete_img_from_federation($id,$photo){

      if(!empty($id) && !empty($photo)){$this->db->update($this->table_name,array($photo => ''),array('id'=>$id));}

    }

}
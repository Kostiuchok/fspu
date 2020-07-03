<?php
class Smi_model extends CI_Model {
  private $table_name;

  public function __construct() {
    parent::__construct();

    $this->table_name = 'smi';
  }

  public function get_smi_all() {

    $result = $this->db->get($this->table_name);

    return ($result->num_rows() > 0) ? $result->result() : 0;

  }

  public function get_smi($id) {

    $result = $this->db->where('id', $id)

                       ->get($this->table_name);

    return ($result->num_rows() > 0) ? $result->row() : 0;

  }

  public function add_smi($smi){
      
      $this->db->set('title', set_value('title'));

      $this->db->set('link', set_value('link'));

      $this->db->set('image', $smi['image']);

      $this->db->insert($this->table_name);

  }

  public function update_smi($smi, $id){

      $this->db->set('title', set_value('title'));

      $this->db->set('link', set_value('link'));

      if(!empty($smi['image'])) $this->db->set('image', $smi['image']);

      $this->db->where('id',$id)->update($this->table_name);

    }

    public function delete_smi($id){

      if(!empty($id)){$this->db->where('id',$id)->delete($this->table_name);}

    }

    public function delete_img_from_smi($id,$photo){

      if(!empty($id) && !empty($photo)){$this->db->update($this->table_name,array($photo => ''),array('id'=>$id));}

    }

}
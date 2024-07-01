<?php

class User extends CI_Model {

  private $table = 'users';

  public function __construct() {
    parent::__construct();
    $this->load->database();
  }

  public function get() {
    $query = $this->db->order_by("created_at", "desc")->get($this->table);
    // echo $this->db->queries[0]; exit;
    return $query;
  }

  public function insert($data=array()) {
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
  }

  // function getUsersDetail($id){
  //   $this->db->where("id", $id);
  //   $query =  $this->db->get('users');
  //   return $query->row();
  // }
  public function update($data=array(), $id="") {
    $this->db->where("id", $id);
    // $query = $this->db->get('users', $id);
    return $this->db->update($this->table, $data);
  }


  public function delete($id=0) {
    $this->db->where("id", $id);
    return $this->db->delete($this->table);
  }

  //detail data
  public function detail_data($id)
  {
   $this->db->select('*');
   $this->db->from('users');
   $this->db->where('id', $id);
   
   return $this->db->get()->row();
  }

  public function update_data($data)
  {
    $this->db->where('id', $data['id']);
    $this->db->update('users', $data);
  }

}
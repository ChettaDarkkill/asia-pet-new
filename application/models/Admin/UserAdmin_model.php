<?php

class UserAdmin_model extends CI_Model {

  public function delUser($id){
    $this->db->delete('clinic_member', array('id' => $id));
  }
  public function post_edit_user($arr, $id){
      $arr['updated_at'] = date("Y-m-d H:i:s");
      $this->db->where('id', $id);
      $this->db->update('clinic_member', $arr);
  }
  public function postAddAdmin($arr){
      $arr['created_at'] = date("Y-m-d H:i:s");
      $arr['updated_at'] = date("Y-m-d H:i:s");
      $this->db->insert('clinic_member', $arr);
  }

  //
  public function postAddAnimal($arr) {
      $arr['created_date'] = date("Y-m-d H:i:s");
      $arr['updated_date'] = date("Y-m-d H:i:s");
      $this->db->insert('clinic_animal', $arr);
  }
  public function getAddAnimal(){
     $sql = "select * from clinic_animal order by id desc"; 
     $query = $this->db->query($sql);
     $result = $query->result_array();
     return $result;
  }
  public function delAnimal($id){
    $this->db->delete('clinic_animal', array('id' => $id));
  }
  public function getAnimalById($id) {
    $sql = "select * from clinic_animal where id = $id"; 
     $query = $this->db->query($sql);
     $result = $query->result_array();
     return $result;
  }
  public function postEditAnimal($arr, $id ) {
      $arr['updated_date'] = date("Y-m-d H:i:s");
      $this->db->where('id', $id);
      $this->db->update('clinic_animal', $arr);
  }
}
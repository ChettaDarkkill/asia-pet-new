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
}
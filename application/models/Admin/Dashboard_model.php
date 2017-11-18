<?php

class Dashboard_model extends CI_Model {

  public function getAllUser(){
     $this->db->where('role', 'user');
     $this->db->order_by('id', 'desc');
     $result = $this->db->get('clinic_member');
     $result = $result->result_array();
     return $result;
  }
  public function getAllUserAdmin(){
     $this->db->where('role', 'admin');
     $this->db->order_by('id', 'desc');
     $result = $this->db->get('clinic_member');
     $result = $result->result_array();
     return $result;
  }
  public function getCountUA($type){
       $this->db->where('role', $type);
       $result = $this->db->get('clinic_member');
       $result = $result->result_array();
       return count($result);
  }
  public function getCountAppo($type = null){
      if($type == 2){
        $this->db->where('status_booking', $type);
      }
       $result = $this->db->get('clinic_appointment');
       $result = $result->result_array();
       return count($result);
  }
  public function getAppoList($type = null){
     if($type==null) {
        $sql = "select b.first_name, b.last_name , a.* from clinic_appointment a left join clinic_member b on a.member_id = b.id"; 
     }else{
        $sql = "select b.first_name, b.last_name , a.* from clinic_appointment a left join clinic_member b on a.member_id = b.id where a.status_booking = $type";
     }
     
     $query = $this->db->query($sql);
     $result = $query->result_array();
     return $result;
  }
}
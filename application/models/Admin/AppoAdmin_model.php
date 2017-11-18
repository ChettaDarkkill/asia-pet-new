<?php

class AppoAdmin_model extends CI_Model {
  public function delAppo($id){
    $this->db->delete('clinic_appointment', array('id' => $id));
  }
  public function getDetailAppo($id){
     $sql = "select b.* , a.* from clinic_appointment a left join clinic_member b on a.member_id = b.id where a.id = $id ";    
     $query = $this->db->query($sql);
     $result = $query->result_array();
     return $result;
  }
  public function updateCancel($arr, $id){
      $arr['updated_dt'] = date("Y-m-d H:i:s");
      $this->db->where('id', $id);
      $this->db->update('clinic_appointment', $arr);
  }
  public function updateApprove($arr, $id){
      $arr['updated_dt'] = date("Y-m-d H:i:s");
      $this->db->where('id', $id);
      $this->db->update('clinic_appointment', $arr);
  }
}
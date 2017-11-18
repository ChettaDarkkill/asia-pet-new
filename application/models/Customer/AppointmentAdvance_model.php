<?php

class AppointmentAdvance_model extends CI_Model {
    public function insertAppo($arr){
      $list = getUserData();
      $id = $list['id'];
      $arr['member_id'] = $id;
      $arr['status_booking'] = 1;
      $arr['trans_id'] = getGUIDnoHash();
      $arr['created_dt'] = date("Y-m-d H:i:s");
      $arr['updated_dt'] = date("Y-m-d H:i:s");
      $this->db->insert('clinic_appointment', $arr);
    }
}
<?php

class GetAppointment_model extends CI_Model {

  public function getAppoDateFromTo($mm){
     $list = getUserData();
     $id = $list['id'];
     $start = $mm.'-01';
     $end = $mm.'-31';
     $this->db->where('appo_date >=', $start);
     $this->db->where('appo_date <=', $end);
     $this->db->where('status_booking', 3);
     $this->db->where('member_id', $id);
     $result = $this->db->get('clinic_appointment');
     $result = $result->result_array();
     return $result;
  }
}
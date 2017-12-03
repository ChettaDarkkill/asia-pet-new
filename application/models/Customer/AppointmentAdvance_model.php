<?php

class AppointmentAdvance_model extends CI_Model {
    public function insertAppo($arr){
      // force update status to approve
      $list = getUserData();
      $id = $list['id'];
      $arr['member_id'] = $id;
      // $arr['status_booking'] = 1;
      $arr['status_booking'] = 3;
      $arr['trans_id'] = getGUIDnoHash();
      $arr['created_dt'] = date("Y-m-d H:i:s");
      $arr['updated_dt'] = date("Y-m-d H:i:s");
      $this->db->insert('clinic_appointment', $arr);
    }
    public function checkDataDiff($timeBook, $thisDate) {
        $sql = "select *
                from clinic_appointment
                where appo_date = '$thisDate'
                order by appo_date asc
                ";
       $query = $this->db->query($sql);
       $result = $query->result_array();
       return $result;
    }
}
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
     //$this->db->where('member_id', $id);
     $result = $this->db->get('clinic_appointment');
     $result = $result->result_array();
     return $result;
  }
  public function getAppoData($date, $time) {
      $sql = "
            select
               b.id as idm,
               b.first_name, 
               b.last_name , 
               a.* from clinic_appointment a 
               left join clinic_member b on a.member_id = b.id 
               where appo_date = '$date' 
               and appo_time = '$time'
               ";
       $query = $this->db->query($sql);
       $result = $query->result_array();
       return $result;
  }
  public function getAppoId($date, $time) {
           $sql = "
                select
                  *
                    from clinic_appointment a 
                   where appo_date = '$date' 
                   and appo_time = '$time'";
           $query = $this->db->query($sql);
           $result = $query->result_array();
           return $result;
  }
  public function getBookingDetailsPersonModel($dateSearch){
      $sql = "
            select
               b.id as idm,
               b.first_name, 
               b.last_name , 
               a.* from clinic_appointment a 
               left join clinic_member b on a.member_id = b.id 
               where appo_date = '$dateSearch' ";
       $query = $this->db->query($sql);
       $result = $query->result_array();
       return $result;
  }
  public function getBookingDetailsModel($dateSearch){
          $sql = "
                select
                  a.appo_time
                    from clinic_appointment a 
                   where appo_date = '$dateSearch' ";
           $query = $this->db->query($sql);
           $result = $query->result_array();
           return $result;
  }
  public function getResutlBookingModel($dateSearch) {
         $data = explode('-', $dateSearch);
         $y = $data[0];
         $m = $data[1];
         $d = $data[0];

         $start  = $y.'-'.$m.'-'.'1';
         $end = $y.'-'.$m.'-'.'31';

          $sql = "
                select
                   b.id as idm,
                   b.first_name, 
                   b.last_name , 
                   a.* from clinic_appointment a 
                   left join clinic_member b on a.member_id = b.id 
                   where appo_date = '$dateSearch' ";
           $query = $this->db->query($sql);
           $result = $query->result_array();
           return $result;
  }
}
<?php

class SeeAppointment_model extends CI_Model {

        public function updateAppo($arr){
          $id = $arr['appo_hide_id'];
          unset($arr['appo_hide_id']);
          $arr['updated_dt'] = date("Y-m-d H:i:s");
          $this->db->where('id', $id);
          $this->db->update('clinic_appointment', $arr);
        }
        public function getApprEachUser($a=null,$b=null)
        {
           $list = getUserData();
           $id = $list['id'];
           $this->db->order_by('id', 'desc');
           $this->db->where('member_id', $id);
           if($a != null){
             $this->db->where('status_booking', 3);
           }
           if($b != null){
             $this->db->where('status_booking <>', 3);
           }
           $result = $this->db->get('clinic_appointment');
           $result = $result->result_array();
           return $result;
        }
        public function getAppointDetail($id){
           $this->db->where('id', $id);
           $result = $this->db->get('clinic_appointment');
           $result = $result->result_array();
           return $result;
        }
        public function delAppoint($id){
           $this->db->delete('clinic_appointment', array('id' => $id));
        }
}
<?php

class Customer_model extends CI_Model {

        public function delete_appointment_advance($dd,$tt) {
          $this->db->delete('clinic_appointment', 
            array(
              'appo_date' => $dd,
              'appo_time' => $tt
            ));
        }
        public function getAdminByIdRequest($id)
        {
           $this->db->where('id', $id);
           $this->db->where('role', 'admin');
           $result = $this->db->get('clinic_member');
           $result = $result->result_array();
           return $result;    
        }
        public function getCustomerById()
        {
           $list = getUserData();
           $id = $list['id'];
           $this->db->where('id', $id);
           $result = $this->db->get('clinic_member');
           $result = $result->result_array();
           return $result;
        }
        public function getCustomerByIdRequest($id)
        {
           $this->db->where('id', $id);
           $this->db->where('role', 'user');
           $result = $this->db->get('clinic_member');
           $result = $result->result_array();
           return $result;
        }
        public function getListUserActivity($id)
        {
           $sql = "select b.first_name, b.last_name , a.* from clinic_appointment a left join clinic_member b on a.member_id = b.id where a.member_id = $id order by created_dt desc";
           $query = $this->db->query($sql);
           $result = $query->result_array();
           return $result;
        }

}
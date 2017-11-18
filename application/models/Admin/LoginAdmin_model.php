<?php

class LoginAdmin_model extends CI_Model {

        public function checkLogin($username, $password)
        {
           $this->db->where('username', $username);
           $this->db->where('password', $password);
           $this->db->where('role', 'admin');
           $result = $this->db->get('clinic_member');
           $result = $result->result_array();
           return $result;
        }

}
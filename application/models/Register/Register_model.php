<?php

class Register_model extends CI_Model {


    public function insertUser($arr)
    {    
      $arr['created_at'] = date("Y-m-d H:i:s");
      $arr['updated_at'] = date("Y-m-d H:i:s");
      $this->db->insert('clinic_member', $arr);
    }
    public function checkDuplicateUser($username, $limit = 10, $offset = 0)
    {
         $this->db->where('username', $username);
         $result = $this->db->get('clinic_member');
         $result = $result->result_array();
         return count($result);
    }
}
<?php

class CustomerInfo_model extends CI_Model {
        public function updateProfile($arr)
        {
          $arr['updated_at'] = date("Y-m-d H:i:s");
          $list = getUserData();
          $id = $list['id'];
          $this->db->where('id', $id);
          $this->db->update('clinic_member', $arr);
        }
        public function chkOldPass($old_password)
        {
           $list = getUserData();
           $username = $list['username'];
           $this->db->where('username', $username);
           $this->db->where('password', $old_password);
           $result = $this->db->get('clinic_member');
           $result = $result->result_array();
           return $result;
        }
        public function updatePassword($new_password)
        {
          $arr['updated_at'] = date("Y-m-d H:i:s");
          $arr = array(
            'password' => $new_password,
          );
          $list = getUserData();
          $id = $list['id'];
          $this->db->where('id', $id);
          $this->db->update('clinic_member', $arr);
        }
}
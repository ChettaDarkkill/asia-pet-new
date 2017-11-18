<?php

class Report_Appo_Product_Model extends CI_Model {

    public function reportAppoProduct(){
       $sql = " 
                SELECT a.*, b.* FROM clinic_appointment a
                LEFT JOIN clinic_member b on a.member_id = b.id
                order by a.id desc
              ";
       $query = $this->db->query($sql);
       $result = $query->result_array();
       return $result;
    }

}
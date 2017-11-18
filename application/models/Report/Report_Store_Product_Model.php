<?php

class Report_Store_Product_Model extends CI_Model {

    public function reportStoreProduct(){
       $sql = " select * from clinic_product
              ";
       $query = $this->db->query($sql);
       $result = $query->result_array();
       return $result;
    }

}
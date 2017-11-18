<?php

class Report_model extends CI_Model {

    public function reportStoreProduct(){
       $sql = " select * from clinic_product
              ";
       $query = $this->db->query($sql);
       $result = $query->result_array();
       return $result;
    }
    public function reportPayProduct(){
       $sql = " 
              SELECT a.*,b.*,a.created_dt as created_dt_detail
              FROM clinic_service_detail a 
              LEFT JOIN clinic_product b on a.product_id = b.id 
              WHERE a.order_type = 'o'
              and a.product_amt <> '0'
              order by a.created_dt desc
              limit 100
              ";
       $query = $this->db->query($sql);
       $result = $query->result_array();
       return $result;
    }
    public function reportAppoService(){
         $sql = " 
            SELECT a.*, b.* FROM clinic_appointment a
            LEFT JOIN clinic_member b on a.member_id = b.id
            order by a.id desc
          ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
    public function reportService(){
         $sql = " 
           SELECT * FROM clinic_service a
           left join clinic_appointment b on a.appo_id = b.id
           left join clinic_member c on b.member_id = c.id
           order by a.id desc
          ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result;
    }
    public function reportMainPayment(){
         $sql = " 
            SELECT sum(service_bath) as bb FROM clinic_service where order_status = 1
          ";
        $query = $this->db->query($sql);
        $result = $query->result_array();
        return $result[0]['bb'];    
    }
    public function reportPayment(){
             $sql = " 
              SELECT a.product_id ,b.product_name,sum(a.product_amt_sum) as pp
              FROM clinic_service_detail a 
              LEFT JOIN clinic_product b on a.product_id = b.id 
              WHERE a.order_type = 'o'
              and a.product_amt <> '0'
              group by a.product_id
              ";
       $query = $this->db->query($sql);
       $result = $query->result_array();
       return $result;
    }


}
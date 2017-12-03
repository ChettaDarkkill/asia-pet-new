<?php

class Service_model extends CI_Model {

  public function insertAppo($arr){
    $arr['status_booking'] = 3;
    $arr['trans_id'] = getGUIDnoHash();
    $arr['created_dt'] = date("Y-m-d H:i:s");
    $arr['updated_dt'] = date("Y-m-d H:i:s");
    $this->db->insert('clinic_appointment', $arr);
  }
  public function userDetail($id){
       $sql = "select c.* from clinic_service a
              left join clinic_appointment b on a.appo_id = b.id
              left join clinic_member c on b.member_id = c.id
              where a.id = $id
              ";
       $query = $this->db->query($sql);
       $result = $query->result_array();
       return $result;
  }
  public function updateServiceData($arr, $id){
      $arr['updated_dt'] = date("Y-m-d H:i:s");
      $this->db->where('id', $id);
      $this->db->update('clinic_service', $arr);
  }
  public function updateAppoData($arr, $id){
      $arr['updated_dt'] = date("Y-m-d H:i:s");
      $this->db->where('id', $id);
      $this->db->update('clinic_appointment', $arr);
  }
  public function clearOldService($service_id) {
    $this->db->delete('clinic_service_detail', array('service_id' => $service_id));
  }
  public function deleteCharge($id){
       $this->db->delete('clinic_service_detail', array('id' => $id));
  }
  public function getAppoDetail($id){
     $this->db->where('id',$id);
     $result = $this->db->get('clinic_service');
     $result = $result->result_array();
     return $result;
  }
  public function updateAmt($arr,$id){
      $arr['updated_dt'] = date("Y-m-d H:i:s");
      $this->db->where('id', $id);
      $this->db->update('clinic_product', $arr);
  }
  public function getPrice($key){
     $this->db->where('id', $key);
     $result = $this->db->get('clinic_product');
     $result = $result->result_array();
     return $result;
  }
  public function searchAppo($search){
       $sql = "
                select b.first_name, b.last_name , a.* 
                from clinic_appointment a left join clinic_member b 
                on a.member_id = b.id 
                where a.trans_id like '%".$search."%'
                and a.status_booking = 3
                and a.flag = 0
                order by created_dt desc";
       $query = $this->db->query($sql);
       $result = $query->result_array();
       return $result;
  }
  public function searchAppo2($search){
       $sql = "
                select b.first_name, b.last_name , a.* 
                from clinic_appointment a left join clinic_member b 
                on a.member_id = b.id 
                where b.first_name like '%".$search."%'
                and a.status_booking = 3
                and a.flag = 0
                order by created_dt desc";
       $query = $this->db->query($sql);
       $result = $query->result_array();
       return $result;
  }
  public function searchAppo3($search){
       $sql = "
                select b.first_name, b.last_name , a.* 
                from clinic_appointment a left join clinic_member b 
                on a.member_id = b.id 
                where a.appo_animal like '%".$search."%'
                and a.status_booking = 3
                and a.flag = 0
                order by created_dt desc";
       $query = $this->db->query($sql);
       $result = $query->result_array();
       return $result;
  }
  public function insertOrder($arr){
      $arr['created_dt'] = date("Y-m-d H:i:s");
      $arr['updated_dt'] = date("Y-m-d H:i:s");
      $this->db->insert('clinic_service', $arr);
      $insert_id = $this->db->insert_id();
      return  $insert_id;
  }
  public function updateProductDetail($arr){
      $arr['created_dt'] = date("Y-m-d H:i:s");
      $arr['updated_dt'] = date("Y-m-d H:i:s");
      $this->db->insert('clinic_service_detail', $arr);
  }
  public function getProductConfirm($service_id){
      $sql = "
        select a.* , b.* , c.* , b.id as id_detail
        from clinic_service a left join
        clinic_service_detail b on a.id = b.service_id
        left join clinic_product c on b.product_id = c.id
        where a.id = $service_id
      ";
       $query = $this->db->query($sql);
       $result = $query->result_array();
       return $result;
  }
}
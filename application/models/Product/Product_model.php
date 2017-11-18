<?php

class Product_model extends CI_Model {

   public function getProduct(){
     $result = $this->db->get('clinic_product');
     $result = $result->result_array();
     return $result;
   }
   public function getProductActive(){
     $this->db->where('flag',1);
     $this->db->where('amt > ',0);
     $result = $this->db->get('clinic_product');
     $result = $result->result_array();
     return $result;   
   }
   public function postProductEdit($arr,$id){
      $arr['updated_dt'] = date("Y-m-d H:i:s");
      $this->db->where('id', $id);
      $this->db->update('clinic_product', $arr);
   }
   public function postProduct($arr){
      $arr['created_dt'] = date("Y-m-d H:i:s");
      $arr['updated_dt'] = date("Y-m-d H:i:s");
      $this->db->insert('clinic_product', $arr);
   }
   public function removeProduct($id){
    $this->db->delete('clinic_product', array('id' => $id));
   }
   public function editProduct($id){
     $this->db->where('id',$id);
     $result = $this->db->get('clinic_product');
     $result = $result->result_array();
     return $result;
   }
}
<?php

class News_model extends CI_Model {
  public function getNews(){
     $result = $this->db->get('clinic_news');
     $result = $result->result_array();
     return $result;
  }
  public function addNews($arr){
    $this->db->insert('clinic_news', $arr);
  }
  public function deleteNews($id){
    $this->db->delete('clinic_news', array('id' => $id));
  }
  public function editNews($id){
     $this->db->where('id',$id);
     $result = $this->db->get('clinic_news');
     $result = $result->result_array();
     return $result;
  }
  public function editNewsPost($arr, $id_hide){
      $this->db->where('id', $id_hide);
      $this->db->update('clinic_news', $arr);
  }
}
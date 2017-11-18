<?php

class News_model extends CI_Model {

    public function getNews(){
         $this->db->where('flag', 1);
         $this->db->order_by('id', 'desc');
         $result = $this->db->get('clinic_news');
         $result = $result->result_array();
         return $result;
    }
    public function getNewsItem($id){
         $this->db->where('flag', 1);
         $this->db->where('id', $id);
         $result = $this->db->get('clinic_news');
         $result = $result->result_array();
         return $result;
    }
}
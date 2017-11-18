<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MXAdmin_Controller.php");

class News extends MXAdmin_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see https://codeigniter.com/user_guide/general/urls.html
   */
  public function __construct() {
     parent::__construct();
     $this->load->model('News/News_model', 'news_model');
  }
  public function deleteNews($id){
    $this->news_model->deleteNews($id);
    $this->session->set_flashdata('msg_success', 'ลบข้อมูลข่าวเรียบร้อยแล้ว');
    redirect('/News/News/getNews');
  }
  public function editNews($id){
    $result = $this->news_model->editNews($id);
    $data = $result;
    $data = array(
        'path' => 'admin/news/add_news_edit',
        'data' => $data,
    );
    self::render($data);
  }
  public function getNews(){
    $data = $this->news_model->getNews();
    $data = array(
        'path' => 'admin/news/get_news',
        'data' => $data,
    );
    self::render($data);
  }
  public function addNews(){
    $data = '';
    $data = array(
        'path' => 'admin/news/add_news',
        'data' => $data,
    );
    self::render($data);
  }
  public function postNewsEdit(){
      $title = $this->input->post('title');
      $details = $this->input->post('details');
      $flag =  $this->input->post('flag');
      $id_hide = $this->input->post('id_hide');

      $arr = array(
        'title' => $title,
        'details' => $details,
        'flag' => $flag
      );

      $this->news_model->editNewsPost($arr, $id_hide);
      $this->session->set_flashdata('msg_success', 'แก้ไขข้อมูลข่าวเรียบร้อยแล้ว');
      redirect('/News/News/getNews');   
  }
  public function postNews(){
    $title = $this->input->post('title');
    $details = $this->input->post('details');
    $flag =  $this->input->post('flag');
    $arr = array(
      'title' => $title,
      'details' => $details,
      'flag' => $flag
    );
    $this->news_model->addNews($arr);
    $this->session->set_flashdata('msg_success', 'บันทึกข้อมูลข่าวเรียบร้อยแล้ว');
    redirect('/News/News/getNews');
  }
}

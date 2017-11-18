<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MX_Controller.php");

class News extends MX_Controller {

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
     $this->load->model('Customer/News_model', 'news_model');
  }
  public function get_news_detail($id){
    $this->load->model('Customer/News_model', 'news_model');
    $data = $this->news_model->getNewsItem($id);
    $data = array(
        'path' => 'customer/get_news_detail',
        'data' => $data,
    );
    self::render($data);
  }
}

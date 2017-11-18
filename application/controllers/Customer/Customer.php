<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MX_Controller.php");

class Customer extends MX_Controller {

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
     $this->load->model('Customer/Customer_model', 'customer_model');
  }
  public function get_customer_info()
  {
    $list['listUser'] = $this->customer_model->getCustomerById();
    $data = array(
        'path' => 'customer/edit_customer',
        'data' => $list,
    );
    self::render($data);
  }
  public function get_appointment(){
    $arrM = array(
        date("Y-m",strtotime(date('Y-m-d H:i:s'))) => showLongDate(date("m",strtotime(date('Y-m-d H:i:s'))),date("Y",strtotime(date('Y-m-d H:i:s'))),'th'),
        date("Y-m",strtotime("+1 Months")) => showLongDate(date("m",strtotime("+1 Months")),date("Y",strtotime("+1 Months")),'th'),
        date("Y-m",strtotime("+2 Months")) => showLongDate(date("m",strtotime("+2 Months")),date("Y",strtotime("+2 Months")),'th'),
    );
    $data['month'] = $arrM;
    $data = array(
        'path' => 'customer/get_appointment',
        'data' => $data,
    );
    self::render($data);
  }
  public function get_appointment_advance()
  {
    $data = array(
        'path' => 'customer/get_appointment_advance',
        'data' => '',
    );
    self::render($data);
  }
  public function see_appointment()
  {
    $this->load->model('Customer/SeeAppointment_model', 'see_appointment_model');
    $result = $this->see_appointment_model->getApprEachUser(1,null);
    $data = array(
        'path' => 'customer/see_appointment',
        'data' => $result,
    );
    self::render($data);
  }
  public function edit_appointment(){
    $this->load->model('Customer/SeeAppointment_model', 'see_appointment_model');
    $result = $this->see_appointment_model->getApprEachUser(null,1);
    $data = array(
        'path' => 'customer/edit_appointment',
        'data' => $result,
    );
    self::render($data);
  }
  public function get_news(){
    $this->load->model('Customer/News_model', 'news_model');
    $data = $this->news_model->getNews();
    $data = array(
        'path' => 'customer/get_news',
        'data' => $data,
    );
    self::render($data);
  }
}

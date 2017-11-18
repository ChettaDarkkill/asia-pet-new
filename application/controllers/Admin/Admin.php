<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MXAdmin_Controller.php");

class Admin extends MXAdmin_Controller {

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
     $this->load->model('Admin/Dashboard_model', 'dashboard_model');
     $this->load->model('Customer/Customer_model', 'customer_model');
      $this->load->model('Report/Report_model', 'report_model');
  }
  public function index(){
    $arr = array(
      $this->dashboard_model->getCountUA('user'),
      $this->dashboard_model->getCountUA('admin'),
      $this->dashboard_model->getCountAppo(),
      $this->dashboard_model->getCountAppo(2),
      $this->report_model->reportStoreProduct()
    );
    $data = $arr;
    $data = array(
        'path' => 'admin/dashboard/dashboard',
        'data' => $data,
    );
    self::render($data);
  }
  public function getUser($type = null,$flag = ''){
    if($type == 'admin'){
      $result = $this->dashboard_model->getAllUserAdmin();
      $role = 'admin';
    }else{
      $result = $this->dashboard_model->getAllUser();
      $role = 'user';
    }
    
    $data = $result;
    $data = array(
        'path' => 'admin/user/get_user',
        'data' => $data,
        'role' => $role,
        'flag' => $flag
    );
    self::render($data);
  }
  public function editAppo($flag = ''){
    $data['data1'] = $result = $this->dashboard_model->getAppoList(1);
    $data['data2'] = $result = $this->dashboard_model->getAppoList(3);
    $data['data3'] = $result = $this->dashboard_model->getAppoList(2);
    $data = array(
        'path' => 'admin/appo/get_appo',
        'data' => $data,
        'flag' => $flag
    );
    self::render($data);
  }
}

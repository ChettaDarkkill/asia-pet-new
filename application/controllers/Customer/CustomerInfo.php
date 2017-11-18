<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MX_Controller.php");

class CustomerInfo extends MX_Controller {

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
     $this->load->model('Customer/CustomerInfo_model', 'customer_info_model');
     $this->load->model('Customer/Customer_model', 'customer_model');
  }
  public function editPassword(){
    $old_password = $this->input->post('old_password');
    $new_password = $this->input->post('new_password');
    $chk = $this->customer_info_model->chkOldPass($old_password);
    if(count($chk) > 0){
      $result = $this->customer_info_model->updatePassword($new_password);
      echo 200;
    }else{
      echo 400;
    }
    
  } 
  public function editUser(){
    $data = $this->input->post('data');
     $arr = array();
     foreach ($data as $key => $value) {
       switch ($value['name']) {
         case 'first_name':
           $arr['first_name'] = $value['value'];
           break;
         case 'last_name':
           $arr['last_name'] = $value['value'];
           break;
         case 'username':
           $arr['username'] = $value['value'];
           break;
         case 'address':
           $arr['address'] = $value['value'];
           break;
         case 'mobile':
           $arr['mobile'] = $value['value'];
           break;
         default:
           break;
       }
     }
     $this->customer_info_model->updateProfile($arr);
     $result = $this->customer_model->getCustomerById();
     setUserData($result);
     echo 200;
  }
}

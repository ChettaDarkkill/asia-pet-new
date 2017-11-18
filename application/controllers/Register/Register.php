<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {
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
     $this->load->model('Register/Register_model', 'register_model');
  }
  public function postRegister()
  {  
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
         case 'password':
           $arr['password'] = $value['value'];
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
     $ch = $this->checkDuplicateUser($arr);
     if($ch != 0) {
        echo  400;
     } else {
        $arr['role'] = 'user';
        $this->register_model->insertUser($arr);
        echo 200;
     }
  }
  public function checkDuplicateUser($arr){
     $result = $this->register_model->checkDuplicateUser($arr['username']);
     return $result;
  }
}

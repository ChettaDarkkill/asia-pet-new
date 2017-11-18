<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class

class Login extends CI_Controller {

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
     $this->load->helper('admin_helper');
     $this->load->model('Admin/LoginAdmin_model', 'login_admin_model');
  }
  public function index(){
    $data['data'] = '';
    $this->load->view('admin/login',$data);
  }
  public function doLogin(){
     $username = $this->input->post('username');
     $password = $this->input->post('password');
     $result = $this->login_admin_model->checkLogin($username, $password);
     if(count($result) > 0 ){
        setAdminData($result);
        redirect('/Admin/Admin', 'refresh');
     }else{
        redirect('/Admin/Login', 'refresh');
     }
  }
  public function postLogout(){
    deleteAdminData();
    redirect('/Admin/Login', 'refresh');
  }
}

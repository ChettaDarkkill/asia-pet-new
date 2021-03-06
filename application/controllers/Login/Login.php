<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
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
     $this->load->model('Login/Login_model', 'login_model');
  }
  public function postLogout(){
    deleteUserData();
    sleep(2);
  }
  public function postLogin()
  {
      try { 
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->login_model->checkLogin($username, $password);
        if(count($result) > 0 ){
           $this->setSessionForThisUser($result);
           echo 200;
        } else {
          echo 404;
        }
      } catch (Exception $e) {
          var_dump($e->getMessage());
      }
  }
  public function setSessionForThisUser($result)
  {
     setUserData($result);
  }
}

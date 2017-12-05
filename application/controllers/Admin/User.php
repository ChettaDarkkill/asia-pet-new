<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MXAdmin_Controller.php");

class User extends MXAdmin_Controller {

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
     $this->load->model('Admin/UserAdmin_model', 'user_admin_model');
     $this->load->model('Customer/Customer_model', 'customer_model');
  }
  public function postAddAdmin(){
      $id =  $this->input->post('id_hide');
      $first_name =  $this->input->post('first_name');
      $last_name =  $this->input->post('last_name');
      $username =  $this->input->post('username');
      $password =  $this->input->post('password');
      $address =  $this->input->post('address');
      $mobile =  $this->input->post('mobile');
      $arr = array(
        'first_name'=> $first_name,
        'last_name'=> $last_name,
        'username'=> $username,
        'password'=> $password,
        'address'=> $address,
        'mobile'=> $mobile,
        'role' => 'admin'
      );
      $this->user_admin_model->postAddAdmin($arr);
      $this->session->set_flashdata('msg_success', 'เพิ่มผู้ดูแลระบบเรียบร้อยแล้ว');
      redirect('/Admin/Admin/getUser/admin');
  }
  public function addAdmin(){
    $data = '';
    $data = array(
        'path' => 'admin/admin/get_admin_edit',
        'data' => $data
    );
    self::render($data);
  }
  public function deleteUser($id,$type=null){
       $this->user_admin_model->delUser($id);
       $this->session->set_flashdata('msg_success', 'ทำการลบข้อมูลเรียบร้อยแล้ว');
       if($type == 'admin'){ 
          redirect('/Admin/Admin/getUser/admin');
       } else {
          redirect('/Admin/Admin/getUser');
       }
  }
  public function editAdmin($id,$type=null){
    $data = $this->customer_model->getAdminByIdRequest($id);
    $data = array(
        'path' => 'admin/user/get_user_edit',
        'data' => $data,
        'role' => $type
    );
    self::render($data);
  }
  public function editUser($id,$type=null){
    $data = $this->customer_model->getCustomerByIdRequest($id);
    $data = array(
        'path' => 'admin/user/get_user_edit',
        'data' => $data,
        'role' => $type
    );
    self::render($data);
  }
  public function getListUserActivity($id){
    $data = $this->customer_model->getListUserActivity($id);
    $data = array(
        'path' => 'admin/user/get_user_activity',
        'data' => $data,
    );
    self::render($data);
  }
  public function postEditPassword(){
      $id =  $this->input->post('id_hide');
      $old_password =  $this->input->post('old_password');
      $new_password =  $this->input->post('new_password');

      if($old_password == $new_password){
        $arr = array(
          'password'=> $old_password
        );
      } else {
        $arr = array();
      }
      if(count($arr) == 0){
          $this->session->set_flashdata('msg_error', 'แก้ไขรหัสผ่านเรียบร้อยแล้ว');
          redirect('/Admin/Admin/getUser');
      }
      $this->user_admin_model->post_edit_user($arr, $id);
      $this->session->set_flashdata('msg_success', 'แก้ไขรหัสผ่านเรียบร้อยแล้ว');
      redirect('/Admin/Admin/getUser');
  }
  public function postEditUser($type=null){
      $id =  $this->input->post('id_hide');
      $first_name =  $this->input->post('first_name');
      $last_name =  $this->input->post('last_name');
      $username =  $this->input->post('username');
      $address =  $this->input->post('address');
      $mobile =  $this->input->post('mobile');
      //aditional
      $animal_name =  $this->input->post('animal_name');
      $appo_birth_date_show_animal =  $this->input->post('appo_birth_date_show_animal');
      $breed =  $this->input->post('breed');
      $gender =  $this->input->post('gender');
      $color =  $this->input->post('color');

      $arr = array(
        'first_name'=> $first_name,
        'last_name'=> $last_name,
        'username'=> $username,
        'address'=> $address,
        'mobile'=> $mobile,
        'animal_name' => $animal_name,
        'appo_birth_date_show_animal' => $appo_birth_date_show_animal,
        'breed' => $breed,
        'gender' => $gender,
        'color' => $color
      );
      $this->user_admin_model->post_edit_user($arr, $id);
      $this->session->set_flashdata('msg_success', 'แก้ไขข้อมูลเรียบร้อยแล้ว');
      if($type == 'admin') {
        redirect('/Admin/Admin/getUser/admin');
      } else { 
        redirect('/Admin/Admin/getUser');
      }
  }
}

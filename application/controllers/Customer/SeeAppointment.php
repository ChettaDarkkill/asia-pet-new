<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MX_Controller.php");

class SeeAppointment extends MX_Controller {

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
     $this->load->model('Customer/SeeAppointment_model', 'see_appointment_model');
  }
  public function getAppoint(){
    $id = $this->input->post('id');
    $result = $this->see_appointment_model->getAppointDetail($id);
    $data['data'] = $result;
    echo $this->load->view('internal/internal_appo_detail', $data, true);
  }
  public function delAppoint($id){
    $result = $this->see_appointment_model->delAppoint($id);  
    redirect('/Customer/Customer/edit_appointment');
  }
  public function getEdit(){
    $id = $this->input->post('id');
    echo $id;
  }
  public function editAppoint($id){
    $result = $this->see_appointment_model->getAppointDetail($id);
    $data['data'] = $result;
    $data = array(
        'path' => 'customer/get_appointment_advance_edit',
        'data' => $data,
    );
    self::render($data);
  }
  public function postEditAppo(){
    $data = $this->input->post('data');
    $arr = array();
     foreach ($data as $key => $value) {
       switch ($value['name']) {
         case 'appo_hide_id':
           $arr['appo_hide_id'] = $value['value'];
           break;
         case 'appo_name':
           $arr['appo_name'] = $value['value'];
           break;
         case 'appo_detail':
           $arr['appo_details'] = $value['value'];
           break;
         case 'appo_date_show':
           $arr['appo_date'] = $value['value'];
           break;
         case 'appo_time_show':
           $arr['appo_time'] = $value['value'];
           break;
         default:
           break;
       }
     }
     $this->see_appointment_model->updateAppo($arr);
     echo 200;
  }
}

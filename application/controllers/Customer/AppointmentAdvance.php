<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MX_Controller.php");

class AppointmentAdvance extends MX_Controller {

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
     $this->load->model('Customer/AppointmentAdvance_model', 'appointment_advance_model_model');
     $this->load->model('Customer/SeeAppointment_model', 'see_appointment_model');
  }
  public function addAppo(){
    $data = $this->input->post('data');
    // echo '<pre>';
    // print_r($data);
    // die;
    $arr = array();
     foreach ($data as $key => $value) {
       switch ($value['name']) {
         case 'appo_animal':
           $arr['appo_animal'] = $value['value'];
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

     $currentDate = date('Y-m-d');
     $bookDate = $arr['appo_date'];
     if($bookDate < $currentDate) {
        echo 'not_book';
     } else {
       $this->appointment_advance_model_model->insertAppo($arr);
       echo 200;
     }
  }
  public function printTicket($id) {
    $data['data'] = $this->see_appointment_model->getAppointDetail($id);
    $this->load->view('internal/ticket',$data);
  }
}

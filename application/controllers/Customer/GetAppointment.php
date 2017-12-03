<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MX_Controller.php");

class GetAppointment extends MX_Controller {


  private $m28 = array('02');
  private $m29 = array('02');
  private $m31 = array('01','03','05','07','08','10','12');
  private $m30 = array('04','06','09','11');
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
     $this->load->model('Customer/GetAppointment_model', 'get_appointment_model');
  }
  public function getBookingDetails() {
    $arrDdt = [
      '08:00 - 08:15' => '08:00',
      '08:15 - 08:30' => '08:15',
      '08:30 - 08:45' => '08:30',
      '08:45 - 09:00' => '08:45',
      '09:00 - 09:15' => '09:00',
      '09:15 - 09:30' => '09:15',
      '09:30 - 09:45' => '09:30',
      '09:45 - 10:00' => '09:45',
      '10:00 - 10:15' => '10:00',
      '10:15 - 10:30' => '10:15',
      '10:30 - 10:45' => '10:30',
      '10:45 - 11:00' => '10:45',
      '11:00 - 11:15' => '11:00',
      '11:15 - 11:30' => '11:15',
      '11:30 - 11:45' => '11:30',
      '11:45 - 12:00' => '11:45',
      '12:00 - 12:15' => '12:00',
      '12:15 - 12:30' => '12:15',
      '12:30 - 12:45' => '12:30',
      '12:45 - 13:00' => '12:45',
      '13:00 - 13:15' => '13:00',
      '13:15 - 13:30' => '13:15',
      '13:30 - 13:45' => '13:30',
      '13:45 - 14:00' => '13:45',
      '14:00 - 14:15' => '14:00',
      '14:15 - 14:30' => '14:15',
      '14:30 - 14:45' => '14:30',
      '14:45 - 15:00' => '14:45',
      '15:00 - 15:15' => '15:00',
      '15:15 - 15:30' => '15:15',
      '15:30 - 15:45' => '15:30',
      '15:45 - 16:00' => '15:45',
      '16:00 - 16:15' => '16:00',
      '16:15 - 16:30' => '16:15',
      '16:30 - 16:45' => '16:30',
      '16:45 - 17:00' => '16:45',
      '17:00 - 17:15' => '17:00',
      '17:15 - 17:30' => '17:15',
      '17:30 - 17:45' => '17:30',
      '17:45 - 18:00' => '17:45',
      '18:00 - 18:15' => '18:00',
      '18:15 - 18:30' => '18:15',
      '18:30 - 18:45' => '18:30',
      '18:45 - 19:00' => '18:45',
      '19:00 - 19:15' => '19:00',
      '19:15 - 19:30' => '19:15',
      '19:30 - 19:45' => '19:30',
      '19:45 - 20:00' => '19:45'

    ];

    $userdata = getUserData();

    $dateSearch = $this->input->post("data");
    $arr = [];
    $arr2 = [];
    $res = $this->get_appointment_model->getBookingDetailsModel($dateSearch);
    $res2 = $this->get_appointment_model->getBookingDetailsPersonModel($dateSearch);
    foreach ($res as $key => $value) {
      array_push($arr, substr($value['appo_time'], 0 , 5));
    }
    foreach ($res2 as $key1 => $value1) {
      array_push($arr2, $value1['idm']);
    }

    $data['arrDdt'] = $arrDdt;
    $data['timeBook'] = $arr;
    $data['dateSearch'] = $dateSearch;
    $data['userdata'] = $userdata;
    $data['userBook'] = $arr2;

    echo $this->load->view('internal/get_booking_details', $data, true);
  }
  public function getResutlBooking() { 
    $dateSearch = $this->input->post("data");
    $res = $this->get_appointment_model->getResutlBookingModel($dateSearch);
    $data['data'] = $res;
    echo $this->load->view('internal/get_details_by_calendar', $data, true);
  }
  public function getAppoData() {
    $mm = $this->input->post('mm');
    if($mm==''){
      echo '';
      die;
    }
    $res = $this->get_appointment_model->getAppoDateFromTo($mm);
    $res  = $this->getListMonth($res,$mm);
    $data['list_m'] = $res;
    $data['mm'] = $mm ;
    $data['data'] = '';
    $data['currentDate'] = date('Y-m-d');
    echo $this->load->view('internal/get_calendar', $data, true);
  }
  public function getArrAppo($res){
    $arr=array();
    $ff = array();
    foreach ($res as $key => $value) {
      $ff = explode('-', $value['appo_date']);
      $arr[$ff[2]] = $res[$key];
    }
    return $arr;
  }
  public function getListMonth($res,$mm){
      // $arrAppo = $this->getArrAppo($res);
    // echo '<pre>';
    // print_r($res);
    // die;
      $arrAppo = $res;

      $arr1 = array('01' => '','02'=> '','03'=> '','04'=> '','05'=> '','06'=> '','07'=> '');
      foreach ($arr1 as $key => $value) {
        foreach ($arrAppo as $key2 => $value2) {
          $day = date('d', strtotime($value2['appo_date']));
            if($key == $day){
              $arr1[$key] = $arrAppo[$key2];
            }
        }
      }
      $arr2 = array('08'=> '','09'=> '','10'=> '','11'=> '','12'=> '','13'=> '','14'=> '');
      foreach ($arr2 as $key => $value) {
        foreach ($arrAppo as $key2 => $value2) {
          $day = date('d', strtotime($value2['appo_date']));
            if($key == $day){
              $arr2[$key] = $arrAppo[$key2];
            }
        }
      }
      $arr3 = array('15'=> '','16'=> '','17'=> '','18'=> '','19'=> '','20'=> '','21'=> '');
      foreach ($arr3 as $key => $value) {
        foreach ($arrAppo as $key2 => $value2) {
          $day = date('d', strtotime($value2['appo_date']));
          if($key == $day){
            $arr3[$key] = $arrAppo[$key2];
          }
        }
      }
      $arr4 = array('22'=> '','23'=> '','24'=> '','25'=> '','26'=> '','27'=> '','28'=> '');

      foreach ($arr4 as $key => $value) {
        foreach ($arrAppo as $key2 => $value2) {
          $day = date('d', strtotime($value2['appo_date']));
          if($key == $day){
            $arr4[$key] = $arrAppo[$key2];
          }
        }
      }


      $arrM = explode('-', $mm);
      $mm = $arrM['1'];
      if(in_array($mm, $this->m28)){
        $arr5 = array('29'=> '','.'=> '','..'=> '','...'=> '','....'=> '','.....'=> '','......'=> '');
      }else if(in_array($mm, $this->m30)){
        $arr5 = array('29'=> '','30'=> '','.'=> '','..'=> '','...'=> '','....'=> '','.....'=> '');
      }else if(in_array($mm, $this->m31)){
        $arr5 = array('29'=> '','30'=> '','31'=> '','.'=> '','..'=> '','...'=> '','....'=> '');
      }else {
        $arr5 = array('29'=> '','30'=> '','31'=> '');  
      }
      foreach ($arr5 as $key => $value) {
        foreach ($arrAppo as $key2 => $value2) {
          $day = date('d', strtotime($value2['appo_date']));
          if($key == $day){
            $arr5[$key] = $arrAppo[$key2];
          }
        }
      }

      $arr = array(
        'r1' => $arr1,
        'r2' => $arr2,
        'r3' => $arr3,
        'r4' => $arr4,
        'r5' => $arr5
      );
      return $arr;
  }
}

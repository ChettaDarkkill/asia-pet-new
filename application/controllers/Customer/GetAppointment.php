<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MX_Controller.php");

class GetAppointment extends MX_Controller {


  private $m28 = array('02');
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
  public function getAppoData(){
    $mm = $this->input->post('mm');
    if($mm==''){
      echo '';
      die;
    }
    $res = $this->get_appointment_model->getAppoDateFromTo($mm);
    $res  = $this->getListMonth($res,$mm);
    $data['list_m'] = $res;
    $data['data'] = '';
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
      $arrAppo = $this->getArrAppo($res);
      $arr1 = array('01' => '','02'=> '','03'=> '','04'=> '','05'=> '','06'=> '','07'=> '');
      foreach ($arr1 as $key => $value) {
        foreach ($arrAppo as $key2 => $value2) {
          if($key == $key2){
            $arr1[$key] = $arrAppo[$key2];
          }
        }
      }
      $arr2 = array('08'=> '','09'=> '','10'=> '','11'=> '','12'=> '','13'=> '','14'=> '');
      foreach ($arr2 as $key => $value) {
        foreach ($arrAppo as $key2 => $value2) {
          if($key == $key2){
            $arr2[$key] = $arrAppo[$key2];
          }
        }
      }
      $arr3 = array('15'=> '','16'=> '','17'=> '','18'=> '','19'=> '','20'=> '','21'=> '');
      foreach ($arr3 as $key => $value) {
        foreach ($arrAppo as $key2 => $value2) {
          if($key == $key2){
            $arr3[$key] = $arrAppo[$key2];
          }
        }
      }
      $arr4 = array('22'=> '','23'=> '','24'=> '','25'=> '','26'=> '','27'=> '','28'=> '');
      foreach ($arr4 as $key => $value) {
        foreach ($arrAppo as $key2 => $value2) {
          if($key == $key2){
            $arr4[$key] = $arrAppo[$key2];
          }
        }
      }


      $arrM = explode('-', $mm);
      $mm = $arrM['1'];
      if(in_array($mm, $this->m28)){
        $arr5 = array('29'=> '');
      }else if(in_array($mm, $this->m30)){
        $arr5 = array('29'=> '','30'=> '','.'=> '','..'=> '','...'=> '','....'=> '','.....'=> '');
      }else if(in_array($mm, $this->m31)){
        $arr5 = array('29'=> '','30'=> '','31'=> '','.'=> '','..'=> '','...'=> '','....'=> '');
      }else {
        $arr5 = array('29'=> '','30'=> '','31'=> '');  
      }
      foreach ($arr5 as $key => $value) {
        foreach ($arrAppo as $key2 => $value2) {
          if($key == $key2){
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

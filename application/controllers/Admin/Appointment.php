<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MXAdmin_Controller.php");

class Appointment extends MXAdmin_Controller {

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
     $this->load->model('Admin/AppoAdmin_model', 'appo_admin_model');
  }
  public function deleteAppo($id){
       $this->appo_admin_model->delAppo($id);
       $this->session->set_flashdata('msg_success', 'ทำการลบข้อมูลเรียบร้อยแล้ว');
       redirect('/Admin/Admin/editAppo');
  }
  public function detailAppo($id,$flag = null){

    $data =  $this->appo_admin_model->getDetailAppo($id);
    $data = array(
        'path' => 'admin/appo/get_appo_edit',
        'data' => $data,
    );
    if($flag == 1){
       $data['flag'] = $flag;
       $data['txtAlert'] = "รายการที่อนุมัติแล้ว";
    }
    if($flag == 2){
       $data['flag'] = $flag;
       $data['txtAlert'] = "รายการที่ถูกยกเลิก";
    }
    self::render($data);
  }
  public function cancelRequest(){
    $id = $this->input->post('ids');
    $arr = array(
        'reason' => $this->input->post('detail'),
        'status_booking' => 2
    );
     $data =  $this->appo_admin_model->updateCancel($arr, $id);
     $this->session->set_flashdata('msg_success', 'ยกเลิกการนัดหมายเรียบร้อยแล้ว');
     redirect('/Admin/Admin/editAppo');
  }
  public function cancelAppo($id){
    $data =  $this->appo_admin_model->getDetailAppo($id);
    $data = array(
        'path' => 'admin/appo/cancel_appo_edit',
        'data' => $data,
    );
    self::render($data);
  }
  public function approveAppo($id){
    $arr = array(
        'status_booking' => 3
    );
     $data =  $this->appo_admin_model->updateApprove($arr, $id);
     $this->session->set_flashdata('msg_success', 'อนุมัติเรียบร้อยแล้ว');
     redirect('/Admin/Admin/editAppo');
  }
}

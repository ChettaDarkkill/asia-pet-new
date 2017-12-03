<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MXAdmin_Controller.php");

class Service extends MXAdmin_Controller {

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
     $this->load->model('Service/Service_model', 'service_model');
  }
  public function addAppo(){
    $data = $this->input->post('data');
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
         case 'member_id':
           $arr['member_id'] = $value['value'];
           break;
         default:
           break;
       }
     }
     $this->service_model->insertAppo($arr);
     echo 200;
  }
  public function updateDataForSuccess(){
     $id_re = $this->input->post('id_re');
     $data = $this->service_model->getProductConfirm($id_re);
     foreach ($data as $key => $value) {
       if($value['order_type'] == 'o' && $value['product_amt'] == 0){
          unset($data[$key]);
       }else if($value['order_type'] == 'o' && $value['product_amt'] > 0){
          $this->updateProduct($value);
       }
     }
      $this->updateAppoStatus($id_re);
      $data = array_values($data);
      echo 200;
  }
  public function comfirmChargeData($id,$id_re){
     $data = $this->service_model->getProductConfirm($id_re);
     foreach ($data as $key => $value) {
       if($value['order_type'] == 'o' && $value['product_amt'] == 0){
          unset($data[$key]);
       }
     }
      $data = array_values($data);
      $data = array(
          'path' => 'admin/service/order_success',
          'data' => $data,
      );
      self::render($data); 
  }
  public function updateAppoStatus($id){
     $data = $this->service_model->getAppoDetail($id);
     $appo_id = $data[0]['appo_id'];
     $arr = array(
       'order_status' => 1
     );
     $this->service_model->updateServiceData($arr, $id);
     $arr = array(
       'flag' => 1
     );
     $this->service_model->updateAppoData($arr, $appo_id);
  }
  public function updateProduct($value){ 
      $id = $value['product_id'];
      $n_amt = $value['product_amt'];
      $data = $this->service_model->getPrice($id);
      $amt = $data[0]['amt'];
      $amt = $amt - $n_amt;
      $arr = array(
        'amt' => $amt
      );
      $this->service_model->updateAmt($arr,$id);
  }
  public function deleteCharge($id,$id_re){
    $this->service_model->deleteCharge($id);
    $this->session->set_flashdata('msg_success', 'ลบข้อมูลข่าวเรียบร้อยแล้ว');
    redirect('/Service/Service/confirmCharge/'.$id_re);
  }
  public function postService(){
    $appo_id = $this->input->post('appo_id');
    $service_detail = $this->input->post('service_detail');
    $service_bath = $this->input->post('service_bath');

    $arr = array(
        'appo_id' => $appo_id,
        'service_detail' => $service_detail,
        'service_bath' => $service_bath,
        'order_status' => 0
    );

    $id = $this->service_model->insertOrder($arr);
    redirect('/Service/Service/optionCharge/'.$id.'?app_re_id='.$appo_id);

  }
  public function postOption(){
    $sum = 0;
    $product = $this->input->post('product');
    $service_id = $this->input->post('service_id');
    // echo $service_id . "<br/>";
    // echo "<pre>";
    // print_r($product);
    // die;
    foreach ($product as $key => $value) {
         $sum += $value;
    }
    $this->service_model->clearOldService($service_id);
    if($sum > 0 ){
      foreach ($product as $key => $value) {
        $price = $this->service_model->getPrice($key);
        $price = $price[0]['price'];
           if($key != 0) {
             $arr = array(
                'product_id' => $key,
                'product_amt' => $value,
                'product_amt_sum' => intval($price) * intval($value),
                'service_id' => $service_id,
                'order_type' => 'o'
             );
             $this->service_model->updateProductDetail($arr);
            }
      }
    }
   $arr = array(
      'service_id' => $service_id,
      'order_type' => 'm'
   );
   $this->service_model->updateProductDetail($arr);
   redirect('/Service/Service/confirmCharge/'.$service_id);
  }
  public function serviceCharge($id,$flag=null){
    $this->load->model('Admin/AppoAdmin_model', 'appo_admin_model');
    $data =  $this->appo_admin_model->getDetailAppo($id);
    $data = array(
        // 'path' => 'admin/appo/get_appo_edit',
        'path' => 'admin/service/get_service_takecare',
        'data' => $data,
    );
    $data['id_option'] = $id;
    if($flag == 1) {
       $data['flag'] = $flag;
       $data['txtAlert'] = "รายการที่อนุมัติแล้ว";
    }
    if($flag == 2) {
       $data['flag'] = $flag;
       $data['txtAlert'] = "รายการที่ถูกยกเลิก";
    }
    self::render($data);
  }
  public function getService(){
    $data = '';
    $data = array(
        'path' => 'admin/service/get_service',
        'data' => $data,
        'dataSearch' => array()
    );
    self::render($data);
  }
  public function optionCharge($id){
    $this->load->model('Product/Product_model', 'product_model');
    $data = $this->product_model->getProductActive();
    $data = array(
        'path' => 'admin/service/option_charge',
        'data' => $data,
        'dataSearch' => array(),
        'service_id' => $id
    );
    self::render($data);  
  }
  public function confirmCharge($id){
      
    $data = $this->service_model->getProductConfirm($id);
    $userDetail = $this->service_model->userDetail($id);
    $data = array(
        'path' => 'admin/service/confirm_charge',
        'data' => $data,
        'dataSearch' => array(),
        'member_id' => $userDetail[0]['id']
    );
    self::render($data);  
  }
  public function searchAppo(){
    $search = $this->input->post('search');
    $typeOfSearch = $this->input->post('typeOfSearch');
    if($typeOfSearch == 1)  { 
        $dataSearch = $this->service_model->searchAppo($search);
    } else if($typeOfSearch == 2) {
        $dataSearch = $this->service_model->searchAppo2($search);
    } else {
        $dataSearch = $this->service_model->searchAppo3($search);
    }
    if($search == '' || empty($search )){
      redirect('/Service/Service/getService');
    } else {
      $dataSearch = $dataSearch;
    }
    $data = '';
    $data = array(
        'path' => 'admin/service/get_service',
        'data' => $data,
        'dataSearch' => $dataSearch
    );
    self::render($data);
  }
}

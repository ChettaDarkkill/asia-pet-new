<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MXAdmin_Controller.php");

class Product extends MXAdmin_Controller {

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
     $this->load->model('Product/Product_model', 'product_model');
  }
  public function postProductEdit(){
    $product_name = $this->input->post('product_name');
    $product_detail = $this->input->post('product_detail');
    $price = $this->input->post('price');
    $amt = $this->input->post('amt');
    $unit = $this->input->post('unit');
    $flag =  $this->input->post('flag');
    $id = $this->input->post('id_hide');
    $arr = array(
      'product_name' => $product_name,
      'product_detail' => $product_detail,
      'price' => $price,
      'amt' => $amt,
      'unit' => $unit,
      'flag' => $flag
    );
    $this->product_model->postProductEdit($arr,$id);
    $this->session->set_flashdata('msg_success', 'แก้ไขข้อมูลข่าวเรียบร้อยแล้ว');
    redirect('/Product/Product/getProduct');
  }
  public function editProduct($id){
    $result = $this->product_model->editProduct($id);
    $data = $result;
    $data = array(
        'path' => 'admin/product/get_product_edit',
        'data' => $data,
    );
    self::render($data);
  }
  public function removeProduct($id){
    $this->product_model->removeProduct($id);
    $this->session->set_flashdata('msg_success', 'ลบข้อมูลข่าวเรียบร้อยแล้ว');
    redirect('/Product/Product/getProduct');
  }
  public function getProduct(){
    $data = $this->product_model->getProduct();
    $data = array(
        'path' => 'admin/product/get_product',
        'data' => $data,
    );
    self::render($data);
  }
  public function addProduct(){
    $data = '';
    $data = array(
        'path' => 'admin/product/add_product',
        'data' => $data,
    );
    self::render($data);
  }
  public function postProduct(){
    $product_name = $this->input->post('product_name');
    $product_detail = $this->input->post('product_detail');
    $price = $this->input->post('price');
    $amt = $this->input->post('amt');
    $unit = $this->input->post('unit');
    $flag =  $this->input->post('flag');
    $arr = array(
      'product_name' => $product_name,
      'product_detail' => $product_detail,
      'price' => $price,
      'amt' => $amt,
      'unit' => $unit,
      'flag' => $flag
    );
    $this->product_model->postProduct($arr);
    $this->session->set_flashdata('msg_success', 'บันทึกข้อมูลข่าวเรียบร้อยแล้ว');
    redirect('/Product/Product/getProduct');
  }
}

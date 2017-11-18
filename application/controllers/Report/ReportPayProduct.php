<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// include the base class
require_once("application/core/MXAdmin_Controller.php");

class ReportPayProduct extends MXAdmin_Controller {

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
     $this->load->model('Report/Report_model', 'report_model');
     
  }
  public function goReport(){
        $data['all_product'] = $this->report_model->reportPayProduct();
        $html = $this->load->view('admin/report/data/report_pay_product', $data, true);
        $pdfFilePath = "รายงานการจำหน่ายสินค้า.pdf";

        //load mPDF library
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->SetAutoFont(AUTOFONT_THAIVIET);
        $this->m_pdf->pdf->SetDisplayMode('fullpage');
        //$html   =   '<p lang="th">'.$html.'</p>';
        //$html   =   iconv("UTF-8","UTF-8//IGNORE",$html);
       //generate the PDF from the given html
        $this->m_pdf->pdf->WriteHTML($html, 2);

        //download it.
        $this->m_pdf->pdf->Output($pdfFilePath, "D");
  }
}

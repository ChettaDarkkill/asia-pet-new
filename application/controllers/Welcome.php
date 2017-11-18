<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function save_download()
	  { 
			//load mPDF library
			$this->load->library('m_pdf');
			//load mPDF library
	 
	 
			//now pass the data//
			 $this->data['title']="MY PDF TITLE 1.";
			 $this->data['description']="";
			 $this->data['description']=$this->official_copies;
			 //now pass the data //
	 
			
			$html=$this->load->view('pdf_output',$this->data, true); //load the pdf_output.php by passing our data and get all data in $html varriable.
	 	 
			//this the the PDF filename that user will get to download
			$pdfFilePath ="report-".time()."-download.pdf";
	 
			
			//actually, you can pass mPDF parameter on this load() function
			$pdf = $this->m_pdf->load();
			//generate the PDF!
			$pdf->WriteHTML($html,2);
			//offer it to user via browser download! (The PDF won't be saved on your server HDD)
			$pdf->Output($pdfFilePath, "D");
			echo 'ok';
			 	
	  }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member2 extends CI_Controller {
	public function __construct() {
			parent::__construct();
			if ($this->session->userdata('nama_dsn') != null || $this->session->userdata('nama_dsn') != ""){
				
			} else {
				redirect('Welcome2');
			}
			$this->load->library('form_validation');
			$this->load->model('My_Model2');
			$this->load->helper('url');
		}
	public function index()
	{
		$this->load->view('dosen/home');
	}
	public function absen()
	{
		$this->load->view('dosen/absen');
	}
	public function signout(){
			$data = array('nip','nama_dsn');
			$this->session->unset_userdata($data);
			redirect('Welcome2');
		}

}
?>

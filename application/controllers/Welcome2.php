<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome2 extends CI_Controller {
	public function __construct() {
			parent::__construct();
			if ($this->session->userdata('nama_dsn') != null || $this->session->userdata('nama_dsn') != ""){
				redirect('Member2');
			} else {
				
			}
			$this->load->library('form_validation');
			$this->load->model('My_Model2');
			$this->load->helper('url');
		}
	public function index()
	{
		$this->load->view('dosen/signin');
	}
	public function masuk(){
			$nip = $this->input->post('nip');
			$password = md5($this->input->post('password'));
			$cek = $this->My_Model2->cek_login($nip, $password);
			if($cek->num_rows() == 1){
	 			foreach ($cek->result() as $user) {
	 				$sess_user['nama_dsn'] = $user->nama_dsn;
	 				$sess_user['nip'] = $user->nip;
	 				$this->session->set_userdata($sess_user);
	 			}
	 			redirect('Member2');
			}else{
				redirect ('Welcome2');
			}
	}
}
?>
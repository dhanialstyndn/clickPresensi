<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
			parent::__construct();
			if ($this->session->userdata('nama_depan') != null || $this->session->userdata('nama_depan') != ""){
				redirect('Member');
			} else {
				
			}
			$this->load->library('form_validation');
			$this->load->model('My_Model');
			$this->load->helper('url');
		}
	public function index()
	{
		$this->load->view('signin');
	}
	public function masuk(){
			$nrp = $this->input->post('nrp');
			$kata_sandi = md5($this->input->post('kata_sandi'));
			$cek = $this->My_Model->cek_login($nrp, $kata_sandi);
			if($cek->num_rows() == 1){
	 			foreach ($cek->result() as $user) {
	 				$sess_user['nama_depan'] = $user->nama_depan;
	 				$sess_user['nama_belakang'] = $user->nama_belakang;
	 				$sess_user['nrp'] = $user->nrp;
	 				$this->session->set_userdata($sess_user);
	 			}
	 			redirect('Member');
			}else{
				redirect ('Welcome');
			}
	}
}
?>
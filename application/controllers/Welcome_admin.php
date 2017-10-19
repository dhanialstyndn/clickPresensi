<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_admin extends CI_Controller {
	public function __construct() {
			parent::__construct();
			if ($this->session->userdata('nama') != null || $this->session->userdata('nama') != ""){
				redirect('Admin');
			} else {
				
			}
			$this->load->library('form_validation');
			$this->load->model('queries');
			$this->load->helper('url');
		}
	public function index()
	{
		$data['err_message']="";
        $this->load->view('main/adminmasuk', $data);
	}
	public function masuk(){
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			$cek = $this->queries->cek_login($username, $password);
			if($cek->num_rows() == 1){
	 			foreach ($cek->result() as $user) {
	 				$sess_user['nama'] = $user->nama;
	 				$sess_user['username'] = $user->username;
	 				$this->session->set_userdata($sess_user);
	 			}
	 			redirect('Admin');
			}else{
				redirect ('Welcome_admin');
			}
	}
}
?>
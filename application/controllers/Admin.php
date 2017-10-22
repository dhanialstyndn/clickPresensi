<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
			if ($this->session->userdata('nama') != null || $this->session->userdata('nama') != ""){
				
			} else {
				redirect('Welcome_admin');
			}
			$this->load->library('form_validation');
			$this->load->model('queries');
			$this->load->helper('url');
			$this->load->helper('form');
                   
		}
		
	public function index()
	{
		$this->load->model('queries');
		$mahasiswa = $this->queries->getUser();
		$this->load->view('welcome_message', ['mahasiswa' => $mahasiswa]);
	}
	
	// public function data_mahasiswa()
	// {

	// 	$this->load->model('queries');
	// 	$mahasiswa = $this->queries->getUser();
	// 	echo '<pre>';
	// 	print_r($user);
	// 	echo '</pre>';
	// 	exit();
	// 	$this->load->view('welcome_message', ['mahasiswa' => $mahasiswa]);
	// }
	
	public function create(){
		$this->load->view('create');
	}
	
	public function save(){
		
		$this->form_validation->set_rules('nrp', 'NRP', 'trim|required|is_unique[mahasiswa.nrp]');
		$this->form_validation->set_rules('nama_depan', 'Nama', 'trim|required');
		$this->form_validation->set_rules('nama_belakang', 'Nama', 'trim|required');
		$this->form_validation->set_rules('kata_sandi', 'Password', 'trim|required');
		//$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[kata_sandi]');
		if($this->form_validation->run() != false)
		{$data = array(
				'nrp' => $this->input->post('nrp'),
				'nama_depan' => $this->input->post('nama_depan'),
				'nama_belakang' => $this->input->post('nama_belakang'),
				'kata_sandi' => md5($this->input->post('kata_sandi')));

			$this->queries->addUser($data);
                        return redirect('Admin');
			
		}
		else
		{
                        $data['message'] = 'Gagal Validate Produk';
			$this->load->view('create');
		}
	}
	
	
        public function delete($nrp){
		$this->load->model('queries');
		if($mahasiswa = $this->queries->deleteUser($nrp)){
			$this->session->set_flashdata('msg', 'User Deleted Successfully!');} else {$this->session->set_flashdata('msg', 'User Deletion Failed');}
		return redirect('Admin');
	}
	public function signout(){
			$data = array('username','nama');
			$this->session->unset_userdata($data);
			redirect('Welcome_admin');}}

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
		/*echo '<pre>';
		print_r($user);
		echo '</pre>';
		exit();*/
		$this->load->view('welcome_message', ['mahasiswa' => $mahasiswa]);
	}
	function beranda() {
		$this->load->model('queries');
		$mahasiswa = $this->queries->getUser();
		/*echo '<pre>';
		print_r($user);
		echo '</pre>';
		exit();*/
		$this->load->view('welcome_message', ['mahasiswa' => $mahasiswa]);
        $this->load->view('main/header');
        $this->load->view('main/data_mahasiswa');
        $this->load->view('main/sidebar');
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
	
	public function update($nrp){
		$this->load->model('queries');
		$mahasiswa = $this->queries->getSingleUser($nrp);
		$this->load->view('update', ['mahasiswa' => $mahasiswa]);
	}
	
	public function save(){
		 $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
		$this->form_validation->set_rules('nrp', 'NRP', 'trim|required');
		$this->form_validation->set_rules('nama_depan', 'Nama', 'trim|required');
		$this->form_validation->set_rules('nama_belakang', 'Nama', 'trim|required');
		$this->form_validation->set_rules('kata_sandi', 'Password', 'trim|required');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[kata_sandi]');
		if($this->form_validation->run())
		{
			$data = array(
				'nrp' => $this->input->post('nrp'),
				'nama_depan' => $this->input->post('nama_depan'),
				'nama_belakang' => $this->input->post('nama_belakang'),
				'kata_sandi' => md5($this->input->post('kata_sandi')));

			unset($data['submit']);
			unset($data['passconf']);
			$this->load->model('queries');
			if($this->queries->addUser($data)){
				$this->session->set_flashdata('msg', 'User Registration Success');
			} else {
				//$this->session->set_flashdata('msg', 'User Registration Failed');
				$data['err_message']="";
			}
			//return redirect('Admin');
		}
		else
		{
			$this->load->view('create');
		}
	}
	
	public function saveUpdate($nrp){
		$this->form_validation->set_rules('nrp', 'NRP', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		if($this->form_validation->run())
		{
			$data = $this->input->post();
			unset($data['submit']);
			$this->load->model('queries');
			if($this->queries->updateUser($data, $nrp)){
				$this->session->set_flashdata('msg', 'User Data Updated!');
			} else {
				$this->session->set_flashdata('msg', 'User Data Update Failed');
			}
			return redirect('Admin');
		}
		else
		{
			$this->load->view('create');
		}
	}
	
	public function view($nrp){
		$this->load->model('queries');
		$mahasiswa = $this->queries->getSingleUser($nrp);
		$this->load->view('view', ['mahasiswa' => $mahasiswa]);
	}
	
	public function delete($nrp){
		$this->load->model('queries');
		if($mahasiswa = $this->queries->deleteUser($nrp)){
			$this->session->set_flashdata('msg', 'User Deleted Successfully!');
		} else {
			$this->session->set_flashdata('msg', 'User Deletion Failed');
		}
		return redirect('Admin');
	}
	public function signout(){
			$data = array('username','nama');
			$this->session->unset_userdata($data);
			redirect('Welcome_admin');
	}
}

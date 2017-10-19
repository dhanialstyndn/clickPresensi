<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function __construct() {
			parent::__construct();
			if ($this->session->userdata('nama_depan') != null || $this->session->userdata('nama_depan') != ""){
				
			} else {
				redirect('Welcome');
			}
			$this->load->library('form_validation');
			$this->load->model('My_Model');
			$this->load->helper('url');
			$this->load->helper('form');
		}
	public function index()
	{
		$this->load->view('home');
		// $nrp = $this->session->userdata('nrp');
		// $matkul = $this->My_Model->get_matkul($nrp);
		// if($matkul->num_rows() == 1){
		// 	foreach ($matkul->result() as $r) {
		// 		$this->load->view('home', array('kelas' => $matkul));
		// 	}
		// }
	}
	public function absen()
	{
		$this->load->view('absen');
	}
	public function matkul(){
			$id_mahasiswa = $this->session->userdata('nrp');
			$id_matkul = $this->input->post('kode_matkul');
			$verif = $this->My_Model->cek_matkul($id_mahasiswa, $id_matkul);
			if($verif->num_rows() == 1){
	 			foreach ($verif->result() as $kelas) {
	 			}
	 			$this->berhasil();
			}else{
				redirect ('Member/absen');
				
				
			}
	}
	public function berhasil(){
			
			$absensi = array(
				'kd_matkul' => $this->input->post('kode_matkul'),
				'kd_mahasiswa' => $this->session->userdata('nrp')
				
			);

			$this->My_Model->add_absen($absensi);
			$this->index();
	}

	public function signout(){
			$data = array('nrp','nama_depan');
			$this->session->unset_userdata($data);
			redirect('Welcome');
	}
}
?>
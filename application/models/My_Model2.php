<?php

class My_Model2 extends CI_Model {

    public function cek_login($nip, $password){     
        $this->db->where('nip', $nip);
        $this->db->where('password', $password);
        return $this->db->get('dosen');
    }

    function get_user($table,$where){
		$data = $this->db->get_where($table,$where);
		return $data->result_array();

	}
    function login_authen($nip, $password){
		//$this->db->select('*');
		$sql = "select * from dosen where nip = '$nip' and password = '$password'";
		$query = $this->db->query($sql);

		if($query->num_rows()==1){
			return true;
		}else{
			return false;
		}
	}
	function authen_user($nip){
		$sql = "select authentication from dosen where nip = '$nip'";
		$query = $this->db->query($sql);

		if ($query->num_rows() == 1) {
			return $query->result_array();
		}else{
			return false;
		}
	}
	function wrong_password($nip,$value){
		$sql = "update dosen set authentication = $value where nip = '$nip'";
		$query = $this->db->query($sql);
	}
  function get_matkul($nip){
		$sql = "select * from matakuliah JOIN mengajar ON matakuliah.kode_matakuliah = mengajar.kd_mk where mengajar.kd_dsn = '$nip'";
    $query = $this->db->query($sql);
	}

  function get_detail_matkul($table,$where){
		$data = $this->db->get_where($table,$where);
		return $data->result_array();
  }
}


?>

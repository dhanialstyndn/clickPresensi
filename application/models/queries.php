<?php
	class queries extends CI_MODEL{
		
		 public function cek_login($username, $password){     
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('admin');
    }
		public function getUser(){
			$query = $this->db->get('mahasiswa');
			if($query->num_rows() > 0){
                return $query->result();}}
                                
                function getNrp($where){
 		$this->db->where('nrp', $where);
 		$data = $this->db->get('mahasiswa');
 		return $data->result_array();
 	}
		function getCurrentRow() {
                        return $this->db->get('mahasiswa')->num_rows();
                }

		public function addUser($data){
			return $this->db->insert('mahasiswa', $data);
		}
		
		public function deleteUser($nrp){
			return $this->db->delete('mahasiswa', ['nrp'=>$nrp]);
		}
		
	}
?>
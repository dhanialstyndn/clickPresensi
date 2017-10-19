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
				return $query->result();
			}	
		}
		
		public function addUser($data){
			return $this->db->insert('mahasiswa', $data);
		}
		
		public function getSingleUser($nrp){
			$query =  $this->db->get_where('mahasiswa', array('nrp' => $nrp));
			if($query->num_rows() > 0){
			return $query->row();
			}
		}
		
		public function updateUser($data, $nrp){
			 return $this->db->where('nrp', $nrp)
							->update('mahasiswa', $data);
		}
		
		public function deleteUser($nrp){
			return $this->db->delete('mahasiswa', ['nrp'=>$nrp]);
		}
		
	}






?>
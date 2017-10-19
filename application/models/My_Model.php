<?php  

class My_Model extends CI_Model {

     public function cek_login($nrp, $kata_sandi){     
        $this->db->where('nrp', $nrp);
        $this->db->where('kata_sandi', $kata_sandi);
        return $this->db->get('mahasiswa');
    }

     public function get_matkul(){
        $this->db->select('*');
        $this->db->join('mahasiswa', 'kelas.id_mahasiswa = mahasiswa.nrp')->join('mata_kuliah', 'kelas.id_matkul = mata_kuliah.kode_matkul');
        $query = $this->db->get_where('kelas');
        return $query->result_array();
    }
    public function cek_matkul($id_mahasiswa, $id_matkul){     
        $this->db->where('id_mahasiswa', $id_mahasiswa);
        $this->db->where('id_matkul', $id_matkul);
        return $this->db->get('kelas');
    }
    public function add_absen($absensi) {
    	$this->db->set('waktu', 'NOW()', FALSE);
        $this->db->insert('absen', $absensi);
    }
}


?>
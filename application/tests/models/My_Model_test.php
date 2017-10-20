<?php
class Akun_model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('My_Model');
        $this->Welcome = $this->CI->My_Model;
        $this->Member = $this->CI->My_Model;
    }
    
    public function test_cek_akun_mahasiswa(){
        
        $obj            = new stdClass();
        $obj->nrp        = "5215100011";
        $obj->nama_depan      = "Hilda";
        $obj->nama_belakang     = "Hanum";
        $obj->kata_sandi  = "70a801341e03668b2f036c842770765a";
        
        
        $expected = $obj;
        $actual = $this->Welcome->cek_login('');
        $this->assertEquals($expected, $actual);
    }
    
    
}

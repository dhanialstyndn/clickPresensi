<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */


class Admin_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('queries');
		$this->obj = $this->CI->queries;
    }
    public function test_index(){
        $_SESSION['username'] = "kurakura";
        $_SESSION['nama'] = "Husain";
        
        $output = $this->request('GET', 'Admin/index');
        $this->assertContains('<th>NRP</th>', $output);
    }
    
    public function test_index_no_session(){
        $output = $this->request('GET', 'Admin/index');
        $this->assertNull($output);
    }
    
    public function test_create()
	{
		 $_SESSION['username'] = "kurakura";
        $_SESSION['nama'] = "Husain";
        
        $output = $this->request('GET', 'Admin/create');
        $this->assertContains('<label for="inputNama" class="col-md-2 control-label">Nama Depan</label>', $output);
	}
        
        public function test_create_no_session()
	{        
        $output = $this->request('GET', 'Admin/create');
        $this->assertNull($output);
	}
	
	public function test_save_berhasil(){
                $_SESSION['username'] = "kurakura";
                $_SESSION['nama'] = "Husain";
               
		$mula = $this->obj->getCurrentRow();
		$this->request(
			'POST',
			['Admin', 'save'],
			[
			'nrp' => '5215100131',
                        'nama_depan' => 'Yuniar Permatasari',
                        'nama_belakang'    => 'yun@gmailcom',
                        'kata_sandi'     => '123456'
			]
			);
		$akhir = $this->obj->getCurrentRow();
        $expected = $akhir - $mula;
        $this->assertEquals(1, $expected);
        
	}
        
        public function test_save_tanpa_session(){
                $mula = $this->obj->getCurrentRow();
		$this->request(
			'POST',
			['Admin', 'save'],
			[
			'nrp' => '5215100153',
                        'nama_depan' => 'Yuniar Permatasari',
                        'nama_belakang'    => 'yun@gmailcom',
                        'kata_sandi'     => '123456'
			]
			);
		$akhir = $this->obj->getCurrentRow();
        $expected = $akhir - $mula;
        $this->assertEquals(0, $expected);
        
	}
        
         public function test_save_dikosongi(){
                $_SESSION['username'] = "kurakura";
                $_SESSION['nama'] = "Husain";
              
		$mula = $this->obj->getCurrentRow();
		$this->request(
			'POST',
			['Admin', 'save'],
			[
			'nrp' => '5215100111',
                        'nama_depan' => 'Yuniar',
                        'nama_belakang'    => '',
                        'kata_sandi'     => '123456',
                        'passconf'     => '123456'
			]
			);
		$akhir = $this->obj->getCurrentRow();
        $expected = $akhir - $mula;
        $this->assertEquals(0, $expected);
        
	}
        public function test_save_nrpsudahada(){
                $_SESSION['username'] = "kurakura";
                $_SESSION['nama'] = "Husain";
              
		$mula = $this->obj->getCurrentRow();
		$this->request(
			'POST',
			['Admin', 'save'],
			[
			'nrp' => '5215100011',
                        'nama_depan' => 'Yuniar',
                        'nama_belakang'    => 'Permatasari',
                        'kata_sandi'     => '123456'
			]
			);
		$akhir = $this->obj->getCurrentRow();
        $expected = $akhir - $mula;
        $this->assertEquals(0, $expected);  
	}
	public function testdelete(){
                $_SESSION['username'] = "kurakura";
                $_SESSION['nama'] = "Husain";
		$mula = $this->obj->getCurrentRow();
		$id = 0;
		$result = $this->obj->getNrp('5215100131');
		foreach ($result as $x){
			$id = $x['nrp'];
		}
		$url = 'Admin/delete/'.$id;
		$output = $this->request('GET', $url);
		$akhir = $this->obj->getCurrentRow();
	    $expected = $mula - $akhir;
	    $this->assertEquals(1, $expected);
	}
         public function testdelete_tanpalogin(){
		$mula = $this->obj->getCurrentRow();
		$id = 0;
		$result = $this->obj->getNrp('5215100131');
		foreach ($result as $x){
			$id = $x['nrp'];
		}
		$url = 'Admin/delete/'.$id;
		$output = $this->request('GET', $url);
		$akhir = $this->obj->getCurrentRow();
	    $expected = $mula - $akhir;
	    $this->assertEquals(0, $expected);
	}
	    public function test_signout(){
		$_SESSION['username'] = "kurakura";
		$_SESSION['nama'] = "Husain";
		$this->assertTrue( isset($_SESSION['username']) );
		$this->assertTrue( isset($_SESSION['nama']) );
		$this->request('GET', 'Admin/signout');
		$this->assertRedirect('Welcome_admin');
		$this->assertFalse( isset($_SESSION['username']) );
	    }
    
	    public function test_signout_(){
		$this->assertFalse( isset($_SESSION['username']) );
		$this->request('GET', 'Admin/signout');
		$this->assertRedirect('Welcome_admin');
		$this->assertFalse( isset($_SESSION['username']) );
	    }    

}

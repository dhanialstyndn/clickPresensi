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
    
}

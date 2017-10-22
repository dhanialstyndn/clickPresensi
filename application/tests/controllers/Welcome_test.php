<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Welcome_test extends TestCase
{
	public function test_index()
	{
		$output = $this->request('GET', 'Welcome_admin/index');
		$this->assertContains('<title>Sign In</title>', $output);
	}
        

	public function test_method_404()
	{
		$this->request('GET', 'Welcome_admin/method_not_exist');
		$this->assertResponseCode(404);
	}

	public function test_APPPATH()
	{
		$actual = realpath(APPPATH);
		$expected = realpath(__DIR__ . '/../..');
		$this->assertEquals(
			$expected,
			$actual,
			'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
		);
	}
        public function setUp()
    {
        $this->resetInstance();
    }
//        public function test_session_berhasil(){
//        $_SESSION['username'] = "5215100011";
//        $_SESSION['nama_depan'] = "Hilda";
//        $this->assertTrue( isset($_SESSION['username']) );
//        $this->assertTrue( isset($_SESSION['nama_depan']) );
//        $this->request('GET', 'Member');
//        $this->assertRedirect('Member');
//    }
    public function test_masuk_nokatasandi(){
        $this->request('POST', 'Welcome_admin/masuk',
            [
                'username' => 'kurakura',
                'password' => '',
            ]);
        $this->assertRedirect('Welcome_admin');
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    
}

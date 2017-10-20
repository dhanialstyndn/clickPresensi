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
    public function setUp()
    {
        $this->resetInstance();
    }
    
    public function test_masuk_nokatasandi(){
        $this->request('POST', 'Welcome/masuk',
            [
                'nrp' => '5215100011',
                'kata_sandi' => '',
            ]);
        $this->assertRedirect('Welcome');
        $this->assertFalse( isset($_SESSION['nrp']) );
    }
    public function test_masuk_nonrp(){
        $this->request('POST', 'Welcome/masuk',
            [
                'nrp' => '',
                'kata_sandi' => '15041997',
            ]);
        $this->assertRedirect('Welcome');
        $this->assertFalse( isset($_SESSION['nrp']) );
    }
    
    public function test_submit_masuk_unmatch(){
        $this->request('POST', 'Welcome/masuk',
            [
                'nrp' => '5215100011',
                'kata_sandi' => 'unmatch',
            ]);
        $this->assertRedirect('Welcome');
        $this->assertFalse( isset($_SESSION['nrp']) );
    }
    
    public function test_submit_masuk(){
        $this->assertFalse( isset($_SESSION['nrp']) );
        $this->request('POST', 'Welcome/masuk',
            [
                'nrp' => '5215100011',
                'kata_sandi' => '15041997',
            ]);
        $this->assertRedirect('Member');
        $this->assertEquals('5215100011', $_SESSION['nrp']);
    }
    
   
}

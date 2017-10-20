<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */


class Member_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
    }
    public function test_keluar(){
        $_SESSION['nrp'] = "5215100011";
        $this->assertTrue( isset($_SESSION['nrp']) );
        $this->request('GET', 'Member/signout');
        $this->assertRedirect('Welcome');
        $this->assertTrue( isset($_SESSION['nrp']) );
    }
    
    public function test_keluar_(){
        $this->assertFalse( isset($_SESSION['nrp']) );
        $this->request('GET', 'Member/signout');
        $this->assertRedirect('Welcome');
        $this->assertFalse( isset($_SESSION['nrp']) );
    }    
}

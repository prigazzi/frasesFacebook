<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 27/04/13
 * Time: 4:23
 * To change this template use File | Settings | File Templates.
 */

//include_once 'core/Globals.php';
class GlobalsTest extends PHPUnit_Framework_TestCase
{
    public function testGet(){
        $_GET['key'] = 'alan1=1/lalala/"asd"';
        $this->assertEquals('alan11lalalaasd', Globals::get('key'));
    }

    public function testPost(){
        $_POST['key'] = 'alan1=1/lalala/"asd"';
        $this->assertEquals('alan11lalalaasd', Globals::post('key'));
    }
}

<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
require_once 'core/Config.php';
require_once 'core/Bootstrap.php';
require_once 'core/Request.php';


class BootstrapTest extends PHPUnit_Framework_TestCase{
    /**
     * @dataProvider urlsProvider
     * @expectedException Exception
     */
    public function testRun($url){
        try{
            $_GET['url'] = $url;
            $request = new Request();
            $this->assertFileExists(Bootstrap::run($request));
        }catch(Exeption $e){
            $this->assertEquals('no encontrado', $e->getMessage());
        }
    }

    public function urlsProvider(){
        return array(
            array('abm'),
            array('abm/usuarios'),
            array('fafafa/rtd/sad'),
        );
    }

}
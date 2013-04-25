<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 24/04/13
 * Time: 17:31
 * To change this template use File | Settings | File Templates.
 */

require_once 'Request.php';


class RequestTest extends PHPUnit_Framework_TestCase{



    public function setUp(){ }

    public function tearDown(){ }

    public function testGetCarpeta(){
        $_GET['url'] = 'abm/';
        $request = new Request();
        $this->assertEquals('abm', $request->getCarpeta());
    }
    public function testGetFuncionalidad(){
        $_GET['url'] = 'abm/usuarios/';
        $request = new Request();
        $this->assertEquals('usuarios', $request->getFuncionalidad());
    }
    public function testGetAccion(){
        $_GET['url'] = 'abm/usuarios/buscar/';
        $request = new Request();
        $this->assertEquals('buscar', $request->getAccion());
    }
    public function testGetArgumentos(){
        $_GET['url'] = 'abm/usuarios/buscar/alan/34';
        $request = new Request();
        $this->assertEquals(array('alan','34'), $request->getArgs());
    }
    public function testGetCarpetaVacia(){
        $_GET['url'] = '';
        $request = new Request();
        $this->assertEquals('', $request->getCarpeta());
    }
    public function testGetFuncionalidadVacia(){
        $_GET['url'] = 'abm/';
        $request = new Request();
        $this->assertEquals('', $request->getFuncionalidad());
    }
    public function testGetAccionVacia(){
        $_GET['url'] = 'abm/usuarios/';
        $request = new Request();
        $this->assertEquals('index.php', $request->getAccion());
    }
    public function testGetArgumentosVacios(){
        $_GET['url'] = 'abm/usuarios/buscar/';
        $request = new Request();
        $this->assertEquals(array(), $request->getArgs());
    }

}

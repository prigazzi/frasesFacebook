<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 27/04/13
 * Time: 0:49
 * To change this template use File | Settings | File Templates.
 */
//require_once 'core/Config.php';
//require_once 'core/Session.php';
class SessionTest extends PHPUnit_Framework_TestCase{
    /**
     * @dataProvider sessionProvider
     */
    public function testDestroyParam($clave = false, $valor = false){

      if (is_array($valor)){
       foreach ($valor as $key => $val)
          $_SESSION[$key] = $val;


        Session::destroy($clave);

          foreach ($clave as $key)
          $this->assertArrayNotHasKey($key, $_SESSION);

      }else{
          $_SESSION[$clave] = $valor;
          Session::destroy($clave);
          $this->assertArrayNotHasKey($clave, $_SESSION);
      }

    }

    public function sessionProvider(){
        return array(
            array('nombre', 'alan'),
            array(
                array(
                    'var1',
                    'var2',
                    'var3'
                ),
                array(
                    'var1' => 'valor1',
                    'var2' => 'valor2',
                    'var3' => 'valor3'
                )
            ),
        );
    }

    public function testSet(){
        Session::set('clave1', 'valor1');
        $this->assertArrayHasKey('clave1', $_SESSION);
    }

    public function testGet(){
        $_SESSION['mono'] = 'chimpa';
        $this->assertEquals('chimpa', Session::get('mono'));
    }

    /**
     * @dataProvider levelProvider
     */
    public function testGetLevel($level, $numLevel){
        try{
            $this->assertEquals($numLevel, Session::getLevel($level));
        }catch (Exception $e){
            $this->assertEquals('Error de acceso', $e->getMessage());
        }
    }

    public function levelProvider(){
        return array(
            array('admin', 3),
            array('especial', 2),
            array('usuario', 1),
            array('cualquiera', 10),
        );
    }

    public function testAcceso(){
        Session::set('autenticado', true);
        Session::set('level', 'usuario');

        $this->assertTrue(Session::acceso('usuario'));

    }


    public function testAccesoView(){
        Session::set('autenticado', true);
        Session::set('level', 'usuario');

        $this->assertTrue(Session::acceso('usuario'));
    }

    public function testAccesoEstricto(){
        Session::set('autenticado', true);
        Session::set('level', 'especial');

        $this->assertTrue(Session::accesoEstricto(array('especial')));

    }

    public function testAccesoViewEstricto(){
        Session::set('autenticado', true);
        Session::set('level', 'especial');

        $this->assertTrue(Session::accesoViewEstricto(array('especial')));

    }

}

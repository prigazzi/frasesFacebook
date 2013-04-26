<?php

require_once 'core/Bootstrap.php';
require_once 'core/Request.php';


class BootstrapTest{
    /**
     * @dataProvider urlsProvider
     */
    public function urlsProvider()
    {
        return array(
            array('abm/'),
            array('abm/usuarios/buscar'),
            array('moskito/puro/de/pollo'),
        );
    }
    public function errorTest($url){
        try{
            $_GET['url'] = $url;
            $request = new Request();
            Bootstrap::run($request);
        }catch(Exeption $e){
            return $this->assertEquals('no encontrado', $e->getMessage());
        }
    }


}

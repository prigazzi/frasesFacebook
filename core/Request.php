<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 26/03/13
 * Time: 12:03
 * To change this template use File | Settings | File Templates.
 */




class Request {
    //-----------------------------atributos
    private $_carpeta;
    private $_funcionalidad;
    private $_argumentos;

    //-------------------------------constructor

    public function __construct(){
        if (isset($_GET['url'])){
            $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            $url = array_filter($url);
            $this->_carpeta = strtolower(array_shift($url));
            $this->_funcionalidad = strtolower(array_shift($url));
            $this->_argumentos = $url;
        }
        if(!isset($this->_carpeta)){
            $this->_carpeta = '' ;
        }
        if (!isset($this->_funcionalidad)){
            $this->_funcionalidad = 'index';
        }
        if (!isset($this->_argumentos)){
            $this->_argumentos = array();
        }

    }


    //-------------------------------métodos
    public function getCarpeta(){
        return $this->_carpeta;
    }
    public function getFuncionalidad(){
        return $this->_funcionalidad;
    }
    public function getArgs(){
        return $this->_argumentos;
    }


}

?>
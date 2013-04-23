<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 19/04/13
 * Time: 11:11
 * To change this template use File | Settings | File Templates.
 */
class Globals{
    public $clave;



    public static function post($clave){
        if(isset($_POST[$clave]) && !empty($_POST[$clave])){
            $_POST[$clave] = stripslashes($_POST[$clave]);
            $_POST[$clave] = strip_tags($_POST[$clave]);
            $_POST[$clave] = (string) preg_replace('/[^A-Z0-9_.]/i', '', $_POST[$clave]);
            return trim($_POST[$clave]);
        }
    }


    public static function get($clave){
        if(isset($_GET[$clave]) && !empty($_GET[$clave])){
            $_GET[$clave] = stripslashes($_GET[$clave]);
            $_GET[$clave] = strip_tags($_GET[$clave]);
            $_GET[$clave] = (string) preg_replace('/[^A-Z0-9_.]/i', '', $_GET[$clave]);
            return trim($_GET[$clave]);
        }
    }

}

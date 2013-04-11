<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    class Bootstrap{
        public static function run(Request $peticion){

            $carpeta = $peticion->getCarpeta();
            $funcionalidad = $peticion->getFuncionalidad();
            if ($carpeta != '' && $funcionalidad != '' ){
                $rutaCarpeta = ROOT . DEFAULT_CONTENT . DS . $carpeta;
                $rutaFuncionalidad = $rutaCarpeta . DS . $funcionalidad;
                $_POST['funcjs'] = DEFAULT_CONTENT . DS . $carpeta . DS . $funcionalidad;
            }else{
                $rutaCarpeta = ROOT . DEFAULT_CONTENT;
                $rutaFuncionalidad = $rutaCarpeta;
                $_POST['funcjs'] = DEFAULT_CONTENT;
            }
            $funcionalidad = $rutaFuncionalidad . DS . DEFAULT_CONTROLLER . '.php';

            $args = $peticion->getArgs();
            if (is_readable($funcionalidad)){
                require_once $funcionalidad;

                if(isset($args)){
                    $_GET['args'] = $args;
                }else{
                    $_GET['args'] = '';
                }
            } else {
                throw new Exception('no encontrado');
            }
        }
    }

?>

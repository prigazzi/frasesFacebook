<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    class Bootstrap{
        public static function run(Request $peticion){






            //123123123123
            $carpeta = $peticion->getCarpeta();
            $funcionalidad = $peticion->getFuncionalidad();
            if ($carpeta != '' && $funcionalidad != '' ){
                $rutaCarpeta = ROOT . 'content' . DS . $carpeta;
                $rutaFuncionalidad = $rutaCarpeta . DS . $funcionalidad;
            }else{
                $rutaCarpeta = ROOT . 'content';
                $rutaFuncionalidad = $rutaCarpeta;
            }
            $funcionalidad = $rutaFuncionalidad . DS . 'index.php';
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

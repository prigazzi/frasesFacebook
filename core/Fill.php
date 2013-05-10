<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 10/05/13
 * Time: 9:33
 * To change this template use File | Settings | File Templates.
 */
class Fill{

    static function queryObject($nombreClase, $metodo, $where ='', $limit = '', $props = array(), $vals = array()){
        try{

           if(file_exists(APP_CLASS . $nombreClase)){
            $instancia = new $nombreClase();
           }else{
               throw new Exception('la clase no existe');
           }
            if (!empty($props) && !empty($vals)) {
                if (count($props) == count($vals)){
                    for ($i = 0; $i <= count($props); $i++){
                        $props[$i] = 'set' . $props[$i] . '()'; // nose si esto funciona, de ultima hacer los campos public, toco los magic methods y a la gorra
                        $instancia->$props[$i] = $vals[$i];
                    }
                }
            }
        }catch (Exception $e){
            $e->getMessage();
        }
        return $instancia->$metodo($where, $limit);

    }

}

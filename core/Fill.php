<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 10/05/13
 * Time: 9:33
 * To change this template use File | Settings | File Templates.
 */
class Fill{

    static function fillObject($nombreClase, $metodo, $where ='', $limit = '', $props = array(), $vals = array()){
        try{
            $instancia = new $nombreClase();

            if (!empty($props) && !empty($vals)) {
                if (count($props) == count($vals)){
                    for ($i = 0; $i <= count($props); $i++){
                        $props[$i] = 'set' . $props[$i];
                        $instancia->$props[$i] = $vals[$i];
                    }
                }
            }
        }catch (Exception $e){

        }
        return $instancia->$metodo($where, $limit);

    }

}

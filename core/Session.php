<?php


class Session
{
    public static function init()
    {
        session_start();
    }
    
    public static function destroy($clave = false)
    {
        if($clave){
            if(is_array($clave)){
                for($i = 0; $i < count($clave); $i++){
                    if(isset($_SESSION[$clave[$i]])){
                        unset($_SESSION[$clave[$i]]);
                    }
                }
            }
            else{
                if(isset($_SESSION[$clave])){
                    unset($_SESSION[$clave]);
                }
            }
        }
        else{
            session_destroy();
        }
    }
    
    public static function set($clave, $valor)
    {
        if(!empty($clave))
        $_SESSION[$clave] = $valor;
    }
    
    public static function get($clave)
    {
        if(isset($_SESSION[$clave]))
            return $_SESSION[$clave];
    }

    public static function getLevel($level)
    {
        $role['admin'] = 3;
        $role['especial'] = 2;
        $role['usuario'] = 1;

        if(!array_key_exists($level, $role)){
            throw new Exception('Error de acceso');
        }else{
            return $role[$level];
        }
    }

    public static function acceso($level)
//esta funcion es medio cabeza hacer un tipo de excepcion que me redirija
    {
        if(!Session::get('autenticado')){
            header('location:' . BASE_URL . 'sistema/login/');
            return false;
        }

        if(Session::getLevel($level) > Session::getLevel(Session::get('level'))){
            header('location:' . BASE_URL . 'error');
            return false;
        }
        return true;
    }
    
    public static function accesoView($level)
    {
        if(!Session::get('autenticado')){
            return false;
        }
        
        if(Session::getLevel($level) > Session::getLevel(Session::get('level'))){
            return false;
        }
        
        return true;
    }
    

    
    public static function accesoEstricto(array $level)
    {
        if(!Session::get('autenticado')){
            header('location:' . BASE_URL . 'error/default');
            exit;
        }
        
        if(count($level)){
            if(in_array(Session::get('level'), $level)){
                return true;
            }
        }
        
        header('location:' . BASE_URL . 'error/default');
    }
    
    public static function accesoViewEstricto(array $level)
    {
        if(!Session::get('autenticado')){
            return false;
        }

        if(count($level)){
            if(in_array(Session::get('level'), $level)){
                return true;
            }
        }
        
        return false;
    }
    

}

?>
<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 12/04/13
 * Time: 3:11
 */
$user = Globals::post('usuario');
$pass = Globals::post('pass');

try{
    $usuario = new Usuario();
    $usuario->setUser($user);
    $usuario->setPass($pass);
    $usrLog = $usuario->esUsuario();

    if($usrLog != 'error'){
        Session::set('autenticado', true);
        Session::set('level', $usrLog->rol);
        Session::set('tiempo', time());
    }else{
        throw new Exception('error');
    }

}catch (Exception $e){
    echo $e->getMessage();
}

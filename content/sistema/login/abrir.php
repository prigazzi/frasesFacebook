<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 12/04/13
 * Time: 3:11
 * To change this template use File | Settings | File Templates.
 */
$user = $_POST['usuario'];
$pass = $_POST['pass'];




try{
    $usuario = new Usuario();
    $usuario->setUser($user);
    $usuario->setPass($pass);
    $usrLog = $usuario->esUsuario();

    if($usrLog != 'error'){
        Session::set('autenticado', true);
        Session::set('level', 'usuario');

        Session::set('var1', 'var1');
        Session::set('var2', 'var2');
        Session::set('tiempo', time());
    }else{
        throw new Exception('error');
    }

}catch (Exception $e){
    echo $e->getMessage();
}

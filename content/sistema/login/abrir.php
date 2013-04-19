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

    if(count($usrLog) != 0){
        Session::set('autenticado', true);
        Session::set('level', 'usuario');

        Session::set('var1', 'var1');
        Session::set('var2', 'var2');
        Session::set('tiempo', time());
        header('location:' . BASE_URL);
    }

}catch (Exception $e){

}

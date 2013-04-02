<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 26/03/13
 * Time: 12:36
 * To change this template use File | Settings | File Templates.
 */
echo 'funcionalidad usuario';
//esta busqueda no va aca, es solo una prueba
$usr = new Usuario();
echo '<pre>';
$resultadoIndex = $usr->buscar();
print_r($resultadoIndex);
echo '</pre>';


?>
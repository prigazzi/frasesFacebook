<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 2/04/13
 * Time: 5:00
 * To change this template use File | Settings | File Templates.
 */

$usr = new Usuario();
echo '<pre>';
$resultadoIndex = $usr->buscar();
print_r($resultadoIndex);

echo '</pre>';

?>
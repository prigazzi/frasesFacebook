<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 26/03/13
 * Time: 11:52
 * To change this template use File | Settings | File Templates.
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'core' . DS);

require_once APP_PATH . 'Config.php';
require_once APP_PATH . 'Request.php';
require_once APP_PATH . 'Bootstrap.php';


try{
    $r = new Request();
    Bootstrap::run($r);
}catch(Exception $e){
    echo $e->getMessage();
}


?>
<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 26/03/13
 * Time: 11:52
 */

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'core' . DS);
define('APP_CLASS', ROOT . 'clases' . DS);

try{

    require_once APP_PATH . 'Config.php';
    require_once APP_PATH . 'Request.php';
    require_once APP_PATH . 'Bootstrap.php';
    require_once APP_PATH . 'Database.php';
    require_once APP_PATH . 'Session.php';
    function __autoload($className){
        require_once APP_CLASS . $className . '.php';
    }

    Session::init();
    $r = new Request();
    Bootstrap::run($r);
}catch(Exception $e){
    echo $e->getMessage();
}


    ?>
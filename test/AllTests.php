<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 30/04/13
 * Time: 0:11
 * To change this template use File | Settings | File Templates.
 */

require_once 'todos.php';

class AllTests
{
    public static function suite()
    {

        $suite = new PHPUnit_Framework_TestSuite('PHPUnit Framework');

        $suite->addTestSuite('BootstrapTest');
        $suite->addTestSuite('GlobalsTest');
        $suite->addTestSuite('HashTest');
        $suite->addTestSuite('RequestTest');
        $suite->addTestSuite('SessionTest');
        // ...

        return $suite;
    }
}

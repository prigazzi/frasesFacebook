<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 26/04/13
 * Time: 20:16
 * To change this template use File | Settings | File Templates.
 */
include_once 'core/Hash.php';
include_once 'core/Config.php';

class HashTest extends PHPUnit_Framework_TestCase{
    /**
     * @dataProvider stringProvider
     */
    public function testHash($algoritmo, $data, $key){

        $this->assertNotEquals($data, Hash::getHash($algoritmo, $data, $key));

    }
    public function stringProvider(){
        return array(
            array('SHA1', 'alan', HASH_KEY),
            array('MD5', 'lalala', HASH_KEY),
        );
    }
}

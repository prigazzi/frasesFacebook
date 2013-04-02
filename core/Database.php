<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 27/03/13
 * Time: 20:11
 */
class Database extends PDO{


    private static $PDOInstance;


    public function __construct(){
        if(!self::$PDOInstance) {
            try {
                self::$PDOInstance = new PDO('mysql:host =' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . DB_CHAR
                ));
            } catch (PDOException $e) {
                die("PDO CONNECTION ERROR: " . $e->getMessage() . "<br/>");
            }
        }
    return self::$PDOInstance;
    }

    public function query($statement) {
        return self::$PDOInstance->query($statement);
    }

    /**
     * Execute query and return all rows in assoc array
     *
     * @param string $statement
     * @return array
     */
    public function queryFetchAllAssoc($statement) {
        return self::$PDOInstance->query($statement)->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Execute query and return one row in assoc array
     *
     * @param string $statement
     * @return array
     */
    public function queryFetchRowAssoc($statement) {
        return self::$PDOInstance->query($statement)->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Prepares a statement for execution and returns a statement object
     *
     * @param string $statement A valid SQL statement for the target database server
     * @param array $driver_options Array of one or more key=>value pairs to set attribute values for the PDOStatement obj
    returned
     * @return PDOStatement
     */
    public function prepare ($statement, $driver_options=false) {
        if(!$driver_options) $driver_options=array();
        return self::$PDOInstance->prepare($statement, $driver_options);
    }

}

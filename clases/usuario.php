<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 27/03/13
 * Time: 20:52
 * To change this template use File | Settings | File Templates.
 */
class usuario
{
//-----------------------------atributos
    private $id;
    private $nombre;
    private $apellido;
    private $dni;
    private $_rol;

    private $user;
    private $pass;
//----------------------------constructor
    public function __construct($nombre = -1, $apellido = -1, $user = -1, $pass = -1){
        $this->nombre = $nombre;
        $this->nombre = $apellido;
        $this->nombre = $user;
        $this->nombre = $pass;
    }

//----------------------------metodos
    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function getUser(){
        return $this->user;
    }
    public function setUser($user){
        $this->user = $user;
    }
    public function getPass(){
        return $this->pass;
    }
    public function setPass($pass){
        $this->pass = $pass;
    }

    public function buscar(){
        //prueba de busqueda con PDO
        $sql = "SELECT * FROM usuarios WHERE id = :idUsuario";
        $db = new Database();
        $statement = $db->prepare($sql);
        $statement->execute(array(':idUsuario' => 2));
        $row = $statement->fetchObject();
        return $row;
    }

    public function esUsuario(){
        $sql = "SELECT * FROM usuarios WHERE id = :idUsuario";
        $db = new Database();
        $statement = $db->prepare($sql);
        $statement->execute(array(':idUsuario' => 23));
        $row = $statement->fetchObject();

        if(!empty($row)){
            $this->setNombre($row->nombre);
        }
        return $row;
    }



}

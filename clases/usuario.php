<?php
/**
 * Created by Alan.
 * User: 4D
 * Date: 27/03/13
 * Time: 20:52
 * To change this template use File | Settings | File Templates.
 */
class Usuario{
//-----------------------------atributos
    private $id;
    private $nombre;
    private $apellido;
    private $dni;
    private $user;
    private $pass;
    private $fechaIngreso;
    private $fechaEgreso;
    private $rol;
    private $funcion;
    private $activo;
//----------------------------constructor
    public function __construct(){
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
    public function getDni(){
        return $this->dni;
    }
    public function setDni($dni){
        $this->apellido = $dni;
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
    public function getFechaIngreso(){
        return $this->fechaIngreso;
    }
    public function setFechaIngreso($fechaIngreso){
        $this->fechaIngreso = $fechaIngreso;
    }
    public function getFechaEgreso(){
        return $this->fechaEgreso;
    }
    public function setFechaEgreso($fechaEgreso){
        $this->fechaEgreso = $fechaEgreso;
    }
    public function getRol(){
        return $this->rol;
    }
    public function setRol($rol){
        $this->rol = $rol;
    }
    public function getFuncion(){
        return $this->funcion;
    }
    public function setFuncion($funcion){
        $this->funcion = $funcion;
    }
    public function getActivo(){
        return $this->activo;
    }
    public function setActivo($activo){
        $this->activo = $activo;
    }

    public function buscar(){
        //prueba de busqueda con PDO
        $sql = "SELECT id, nombre, apellido, dni, usuario, pass, fecha_ingreso, fecha_egreso, rol, funcion FROM usuarios WHERE user = :user AND pass = :pass AND activo = TRUE";
        $db = new Database();
        $statement = $db->prepare($sql);
        $statement->execute(array(':user' => $this->user, 'pass' =>$this->pass));
        $row = $statement->fetchObject();
        return $row;
    }


    public function esUsuario(){
        try{
        $sql = "SELECT id, nombre, apellido, dni, usuario, pass, fecha_ingreso, fecha_egreso, rol, funcion FROM usuarios WHERE usuario = :user AND pass = :pass AND activo = TRUE";
        $db = new Database();
        $statement = $db->prepare($sql);
        $statement->execute(array(':user' => $this->user, 'pass' =>$this->pass));
        $row = $statement->fetchObject();

        if(!empty($row)){
            $this->setNombre($row->nombre);
            return $row;
        }else{
            throw new Exception('error');
        }
        }catch (Exception $e){
            return $e->getMessage();
        }

    }



}

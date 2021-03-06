<?php

class Usuario {

//--------------------------------------------------------------------------------//
//--ATRIBUTOS
    public $id;
    public $nombre;
    public $email;
    public $perfil;
    public $foto;
    public $password;

//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
    public function __construct($id = NULL) {
        if ($id !== NULL) {
            $obj = Usuario::TraerUnUsuarioPorId($id);
            $this->id = $obj->id;
            $this->nombre = $obj->nombre;
            $this->email = $obj->email;
            $this->foto = $obj->foto;
            $this->perfil = $obj->perfil;
        }
    }

//--------------------------------------------------------------------------------//
//--------------------------------------------------------------------------------//
//--METODO DE CLASE
    public static function TraerUsuarioLogueado($obj) {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();

        $sql = "SELECT U.id, U.nombre, U.email, U.perfil, U.foto
                FROM usuarios U
                WHERE U.email = :email AND U.password = :pass";

        $consulta = $objetoAccesoDato->RetornarConsulta($sql);
        $consulta->bindValue(':email', $obj->email, PDO::PARAM_STR);
        $consulta->bindValue(':pass', $obj->pass, PDO::PARAM_STR);

        $consulta->execute();

        $usuarioLogueado = $consulta->fetchObject('Usuario');

        return $usuarioLogueado;
    }

    public static function TraerUnUsuarioPorId($id) {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();

        $sql = "SELECT U.id, U.nombre, U.email, U.perfil, U.foto
                FROM usuarios U
                WHERE U.id = :id";

        $consulta = $objetoAccesoDato->RetornarConsulta($sql);
        $consulta->bindValue(':id', $id, PDO::PARAM_INT);

        $consulta->execute();

        $usuarioPorId = $consulta->fetchObject('Usuario');

        return $usuarioPorId;	

   }

    public static function Agregar($obj) {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        
        $sql = "INSERT INTO usuarios (nombre, email, password, perfil) 
                VALUES (:nombre, :email, :pass, :perfil)";
        
        $consulta = $objetoAccesoDato->RetornarConsulta($sql);
        $consulta->bindValue(':nombre', $obj->nombre, PDO::PARAM_STR);
        $consulta->bindValue(':email', $obj->email, PDO::PARAM_STR);
        $consulta->bindValue(':pass', $obj->pass, PDO::PARAM_STR);
        $consulta->bindValue(':perfil', $obj->perfil, PDO::PARAM_STR);
        $consulta->execute();

        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }

    public function ActualizarFoto() {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("UPDATE usuarios SET foto = :foto WHERE id = :id");
        $consulta->bindValue(':id', $this->id, PDO::PARAM_INT);
        $consulta->bindValue(':foto', $this->foto, PDO::PARAM_STR);

        $consulta->execute();

        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }

    public static function Modificar($obj) {

        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("UPDATE usuarios
        SET nombre = :nombre, email = :email, perfil = :perfil WHERE id = :id");
        $consulta->bindValue(':id', $obj->id, PDO::PARAM_INT);
        $consulta->bindValue(':nombre', $obj->nombre, PDO::PARAM_STR);
        $consulta->bindValue(':email', $obj->email, PDO::PARAM_STR);
        $consulta->bindValue(':perfil', $obj->perfil, PDO::PARAM_STR);

        $consulta->execute();

        return $objetoAccesoDato->RetornarUltimoIdInsertado();

    }

    public static function TraerTodosLosUsuarios() {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();

        $sql = "SELECT U.id, U.nombre, U.email, U.perfil, U.foto
                FROM usuarios U";

        $consulta = $objetoAccesoDato->RetornarConsulta($sql);
        $consulta->execute();

        return $consulta->fetchall(PDO::FETCH_CLASS, "Usuario");
    }

    public static function TraerTodosLosPerfiles() {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();

        $sql = "SELECT DISTINCT(U.perfil) AS perfil
                FROM usuarios U";

        $consulta = $objetoAccesoDato->RetornarConsulta($sql);
        $consulta->execute();

        return $consulta->fetchall(PDO::FETCH_ASSOC);
    }

    public static function Borrar($id) {
        $objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
        $consulta = $objetoAccesoDato->RetornarConsulta("DELETE FROM usuarios WHERE usuarios.id = :id");
        $consulta->bindValue(':id', $id, PDO::PARAM_INT);

        $consulta->execute();

        return $objetoAccesoDato->RetornarUltimoIdInsertado();
    }
}
<?php
require "../config/Conexion.php";

class Evento {

    private Integer $id;
    private Integer $id_usuario;
    private String $title;
    private String $start;
    private String $end;
    

    function __construct(
        
    ){}

    function getId() : Integer {
        return $this->id;
    }
    function getIdUsuario(): Integer{
        return $this->id_usuario;
    }
    function getTitle() : String{
        return $this->title;
    }
    function getStart() : String {
        return $this->start;
    }
    function getEnd() : Date {
        return $this->end;
    }


    function setIdUsuario($id_usuario) : Integer {
        $this->id_usuario = $id_usuario;
    }
    function setTitle($title): String{
        $this->title = $title;
    }
    function setStart($start) : Date{
        $this->start = $start;
    }
    function setEnd($end) : Date{
        $this->end = $end;
    }

    function listar(){
        $id_usuario = $_SESSION['idusuario'];
        settype($id_usuario, 'integer');
        $sql = 'SELECT * FROM calendario WHERE id_usuario = '.$id_usuario.';';
        return ejecutarConsulta($sql);
        
    }

    function crear($evento, $fecha, $id_usuario) {
        //$id_usuario = $_SESSION['idusuario'];
        settype($id_usuario, 'integer');
        settype($evento, 'String');
        settype($fecha, 'String');
        $sql = 'INSERT INTO calendario (title, start, end, id_usuario) VALUES ("'.$evento.'", "'.$fecha.'", "'.$fecha.'", '.$id_usuario.');';
        return insertarDatos($sql);
    }
}

<?php

require "../config/Conexion.php";


class Concepto {

    private Integer $id;
    private String $concepto;


    function getConceptos(){
        $sql = 'SELECT * FROM conceptos';
        return ejecutarConsulta($sql);
    }

    function getNombre($id){
        $sql = 'SELECT * FROM conceptos WHERE id = '.$id;
        return ejecutarConsultaSimpleFila($sql);
    }

}
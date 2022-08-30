<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Clientes
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}
	//Implementamos un método para insertar registros
	public function insertar($cedula,$nombre,$direccion,$telefono, $correo, $fecha, $proceso, $observacion, $asesor)
	{
		$sql="INSERT INTO clientes (cedula,nombre,direccion,telefono,estado, correo, fecha, proceso, observacion, asesor)
		VALUES ('$cedula','$nombre','$direccion','$telefono','1', '$correo', '$fecha', '$proceso', '$observacion', '$asesor')";
		return ejecutarConsulta($sql);
	}
    
	//Implementamos un método para editar registros
	public function editar($idcliente,$cedula,$nombre,$direccion,$telefono, $correo, $fecha, $proceso, $observacion, $asesor)
	{
		$sql="UPDATE clientes SET cedula='$cedula',nombre='$nombre',direccion='$direccion',telefono='$telefono', correo='$correo', fecha='$fecha', proceso = '$proceso', observacion = '$observacion' WHERE idcliente='$idcliente'";
		return ejecutarConsulta($sql);
	}
	//Implementamos un método para desactivar Clientes
	public function desactivar($idcliente)
	{
		$sql="UPDATE clientes SET estado ='0' WHERE idcliente='$idcliente'";
		return ejecutarConsulta($sql);
	}
    //Implementamos un método para Activar Clientes
	public function activar($idcliente)
	{
		$sql="UPDATE clientes SET estado ='1' WHERE idcliente='$idcliente'";
		return ejecutarConsulta($sql);
	}
	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($idcliente)
	{
		$sql="SELECT * FROM clientes WHERE idcliente='$idcliente'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT idcliente, cedula, clientes.nombre, clientes.direccion, clientes.telefono, correo, fecha, proceso, observacion, clientes.estado, usuarios.nombre as asesor FROM clientes join usuarios on clientes.asesor = usuarios.idusuario";
		return ejecutarConsulta($sql);		
	}
    
    //Implementar un método para listar los registros y mostrar en el select
	public function select()
	{
		$sql="SELECT idcliente,nombre FROM clientes WHERE estado=1 ORDER BY nombre ASC";
		return ejecutarConsulta($sql);		
	}

	public function guardarArchivo($filename, $idcliente){
		$sql = 'INSERT INTO documentos (nombre, cliente) VALUES ("'.$filename.'", "'.$idcliente.'")';
		ejecutarConsulta($sql);
	}

	public function idclientedecedulaYnombre($cedula, $nombre){
		$sql = 'SELECT * FROM clientes WHERE cedula = "'.$cedula.'" AND nombre = "'.$nombre.'";';
		return ejecutarConsultaSimpleFila($sql);
	}
}0
?>
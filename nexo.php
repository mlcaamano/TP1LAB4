<?php 

include "Personas.php";
include "AccesoDatos.php";


if(isset($_GET['accion']))
{
	$accion=$_GET['accion'];
	if($accion=="traer")
	{
		$respuesta= array();
		$respuesta['listado']=Persona::TraerTodosLosUsuarios();
		$arrayJson = json_encode($respuesta);
		echo  $arrayJson;
	}


	

}
else{

	$DatosPorPost = file_get_contents("php://input");
	$respuesta = json_decode($DatosPorPost);

	var_dump($respuesta);

	switch ($respuesta->datos->accion){
		case 'borrar':
			echo"Voy a borrar";
			Persona::BorrarUnUsuario($respuesta->datos->persona);
			break;
		
		case 'insertar':
			echo"Voy a guardar";
			Persona::InsetarUnUsuarioStatic($respuesta->datos->persona);
			break;

		case 'modificar':
			echo"Voy a modificar";
			$respuesta= array();
			$respuesta['listado']=Persona::TraerUnUsuarioPorId($respuesta->datos->persona);
			$arrayJson = json_encode($respuesta);
			break;

		default:
			# code...
			break;
	}
}



 ?>
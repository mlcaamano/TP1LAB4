<?php
// require_once"AccesoDatos.php";
class Persona
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
  	public $_usuario;
  	public $_clave;

//--------------------------------------------------------------------------------//
//--CONSTRUCTOR

	// public function __construct($dni=NULL)
	// {
	// 		$this->usuario = $obj->Usuario;
	// 		$this->clave = $obj->Clave;
	// }

//--------------------------------------------------------------------------------//
//--TOSTRING	
  	public function ToString()
	{
	  	return $this->apellido."-".$this->nombre."-".$this->dni."-".$this->foto;
	}
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODO DE CLASE
	
	public static function TraerUnUsuario($usuario) 
	{	
		$objetoAccesoDato= AccesoDatos::dameUnObjetoAcceso();
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT Usuario as _usuario, Clave as _clave FROM personas WHERE Usuario='$usuario'");
		//$consulta->bindValue(':usario', $usuario, PDO::PARAM_STR);
		$consulta->execute();
		$UsuarioBuscado=$consulta->fetchObject('Persona');
		return $UsuarioBuscado;				
	}


}

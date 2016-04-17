<?php
// require_once"AccesoDatos.php";
class Persona
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS

	public $_id;
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

	public static function TraerTodosLosUsuarios()
	{
		$objetoAccesoDato=AccesoDatos::dameUnObjetoAcceso();
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT Id as _id, Usuario as _usuario, Clave as _clave FROM personas");
		$consulta->execute();
		return $consulta->fetchall(PDO::FETCH_CLASS, "Persona");
	}
	
	public static function TraerUnUsuario($usuario) 
	{	
		$objetoAccesoDato= AccesoDatos::dameUnObjetoAcceso();
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT Id as _id, Usuario as _usuario, Clave as _clave FROM personas WHERE Usuario='$usuario'");
		//$consulta->bindValue(':usario', $usuario, PDO::PARAM_STR);
		$consulta->execute();
		$UsuarioBuscado=$consulta->fetchObject('Persona');
		return $UsuarioBuscado;				
	}

	public static function TraerUnUsuarioPorId($id) 
	{	
		$objetoAccesoDato= AccesoDatos::dameUnObjetoAcceso();
		$consulta=$objetoAccesoDato->RetornarConsulta("SELECT Id as _id, Usuario as _usuario, Clave as _clave FROM personas WHERE Id='$id'");
		//$consulta->bindValue(':usario', $usuario, PDO::PARAM_STR);
		$consulta->execute();
		$UsuarioBuscado=$consulta->fetchObject('Persona');
		return $UsuarioBuscado;				
	}

	public static function BorrarUnUsuario($id)
	{
		$objetoAccesoDato=AccesoDatos::dameUnObjetoAcceso();
		$consulta=$objetoAccesoDato->RetornarConsulta("DELETE FROM personas WHERE Id='$id'");
		//$consulta->bindValue(':legajo',$legajo, PDO::PARAM_STR);
		$consulta->execute();
		return $consulta->rowCount();
	}

		public function InsetarUnUsuario()
	{
		$objetoAccesoDato=AccesoDatos::dameUnObjetoAcceso();
		$consulta=$objetoAccesoDato->RetornarConsulta("INSERT into personas (Usuario, Clave) VALUES ('$this->_usuario', '$this->_clave')");
		$consulta->execute();
	}

	public static function InsetarUnUsuarioStatic($persona)
	{
		$objetoAccesoDato=AccesoDatos::dameUnObjetoAcceso();
		$consulta=$objetoAccesoDato->RetornarConsulta("INSERT into personas (Usuario, Clave) VALUES ('$persona->_usuario', '$persona->_clave')");
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	
				
	}	

		public static function ModificarUnUsuario()
	{
		$objetoAccesoDato=AccesoDatos::dameUnObjetoAcceso();
		$consulta=$objetoAccesoDato->RetornarConsulta("UPDATE personas SET Usuario='$this->_usuario', Clave='$this->_clave' WHERE Id='$this->_id'");
		$consulta->execute();
	}



}

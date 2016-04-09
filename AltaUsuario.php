<html>

<head>
	<head>
	<meta charset="utf-8">
	<title>Sala De Juegos</title>

	<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="animacion.css">
	<!--final de Estilos-->

	<!--Lógica-Programación-->
    <!--Final de Lógica-Programación -->
</head>

<?php

include_once("Personas.php");
include_once("AccesoDatos.php");

if(isset($_POST['guardar']))
{
	echo "id: ".$_POST['id'];

	if($_POST['id']>'0')
	{
		$miUsuario= new Persona();
		$miUsuario->_id=$_POST['id'];
		$miUsuario->_usuario=$_POST['idUsuario'];
		$miUsuario->_clave=$_POST['idClave'];
		$miUsuario->ModificarUnUsuario();
	}
	else
	{
		$miUsuario= new Persona();
		$miUsuario->_usuario=$_POST['idUsuario'];
		$miUsuario->_clave=$_POST['idClave'];
		$miUsuario->InsetarUnUsuario();
	}

	header('location: grillaUsuario.php');
}


if(isset($_POST['idLegajoParaModificar']))
{
	$UsuarioParaModificar= Persona::TraerUnUsuarioPorId($_POST['idLegajoParaModificar']);	

	$_SESSION['LegajoParaModificar']=$_POST['idLegajoParaModificar'];
}

?>

<body style="margin: 0 12%;">
<div class="container">


<div class="stripes"><span></span></div>
	<div class="main"><div class="inner_copy"></div>
		<div class="left">
			<div class="content">

				<h1>Nuevo usuario</h1>

				<form name="frmAlta" method="post">
				<h2>Datos personales: </h2>
				</br>																					
				<input hidden type="text" name="id" id="id" placeholder="Ingrese numero de id" value="<?php if(isset($_POST['idLegajoParaModificar']))echo "$UsuarioParaModificar->_id"; ?>"/>
				</br>
				<input type="text" name="idUsuario" id="idUsuario" placeholder="Ingrese Usuario" value="<?php if(isset($_POST['idLegajoParaModificar'])) echo "$UsuarioParaModificar->_usuario";?>"/>
				</br>
				<input type="text" name="idClave" id="idClave" placeholder="Ingrese Nombre" value="<?php if(isset($_POST['idLegajoParaModificar'])) echo "$UsuarioParaModificar->_clave" ;?>"/>
				</br>
				<input type="submit" name="guardar" id="guardar"/>
				</form>
			</div>
		</div>
		<div class="clearer"></div>
	</div>
</div>


</div>
</body>

</html>
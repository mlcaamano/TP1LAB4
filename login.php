<html>

<head>
	<meta charset="utf-8">
	<title>Sala De Juegos</title>

	<!--Estilos-->
	<link rel="stylesheet" type="text/css" href="Estilo/default.css">
	<!--final de Estilos-->

	<!--Lógica-Programación-->
    <!--Final de Lógica-Programación -->
</head>

<body style="margin: 0 12%;">
<div class="container">
<!-- 		<div class="header">
			<a><span>Bienvenido al control integral de personal y proyectos</span></a>
		</div> -->

<!-- 		<div class="CajaInicio animated flip">
			<h1>Bienvenido al control integral de personal y proyectos</h1>
			<h3>Ingrese su numero de legajo y clave personal</h3>
		</div> -->
<?php

if(isset($_POST['usuario']))
{
	include_once("Personas.php");
	include_once("AccesoDatos.php");

	$UsuarioObtenido= Persona::TraerUnUsuario($_POST['usuario']);

	if($UsuarioObtenido->usuario==$_POST['legajo'] && $UsuarioObtenido->clave== $_POST['clave'])
	{
		// session_start();
		// $_SESSION['usuario'] = $UsuarioObtenido->usuario;
		// $_SESSION['clave'] = $UsuarioObtenido->clave;
		// setcookie('borde', 1, time() + 24 * 60 * 60);

		header('location: index.php');
	}
	else 
	{
		echo "Hola mundo";
	}
}

?>

	<div class="stripes"><span></span></div>
		<div class="main"><div class="inner_copy"></div>
			<div class="left">
				<div class="content">
					<h1>Control integral de personal y proyectos</h1>
					<form name="FrmLogin" method="post">
						<input type="text" name="usuario" placeholder="Ingrese usuario..."/> 
						</br>
						<input type="text" name="clave" placeholder="Ingrese password..."/>
						</br>
						<input type="submit" name="enviar"/>
					</form>
				</div>
			</div>

<!-- 			<div class="right">
				<div class="subnav">
					<h1>Por favor ingrese su numero de legajo y contraseña para continuar</h1>
				</div>
			</div> -->
			<div class="clearer"></div>
		</div>
	</div>

</div>
</body>

</html>
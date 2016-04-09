<!DOCTYPE html>

<?php
	// session_start();
	// // if($_SESSION['usuario']==$_POST['usuario'])
	// if('1'=='2')	
	// {

	// }
	// else
	// {
	// 	header("location: login.html");
	// }
?>


<html>
	<head>
		<meta charset="utf-8">
		<title>UTN FRA</title>

		<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="animacion.css">
		<!--final de Estilos-->

		<!--Lógica-Programación-->
		<script type="text/javascript" src="jsEntradaSalida-1.js"></script>
        <!--Final de Lógica-Programación -->
		

	</head>
	<body>

		<form id="FormIngreso" method="post" action="indiceJuego.php">
 			<input type="text" name="apellido" id="apellido" placeholder="ingrese apellido" value="<?php echo isset($unaPersona) ?  $unaPersona->GetApellido() : "" ; ?>" /><span id="lblApellido" style="display:none;color:#FF0000;width:1%;float:right;font-size:80">*</span>
			<input type="text" name="nombre" id="nombre" placeholder="ingrese nombre" value="<?php echo isset($unaPersona) ?  $unaPersona->GetNombre() : "" ; ?>" /> <span id="lblNombre" style="display:none;color:#FF0000;width:1%;float:right;font-size:80">*</span>
			<input type="hidden" name="idOculto" id="id" value="<?php echo isset($unaPersona) ? $unaPersona->GetId() : "" ; ?>" />
			<input type="hidden" value="<?php echo $_POST['idParaModificar']; ?>" id="idParaModificar" name="agregar" />
			<input type="hidden" value="" id="hdnAgregar" name="agregar" />
			<input type="button" value="ingresar" id="ingresar" onclick="indiceJuego.php">
			</div>
		</form>


	</body>
</html>
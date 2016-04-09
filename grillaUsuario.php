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

<body style="margin: 0 12%;">
<div class="container">

<script type="text/javascript">

	function Borrar(unLegajo)
	{
		document.getElementById('idLegajoParaBorrar').value=unLegajo;
		document.frmBorrar.submit();
	}

	function Modificar(unLegajo)
	{
		document.getElementById('idLegajoParaModificar').value=unLegajo;
		document.frmModificar.submit();

	}

</script>

	<div class="stripes"><span></span></div>
		<div class="main"><div class="inner_copy"></div>
				<div class="content">
					
					<?php

						include_once("Personas.php");
						include_once("AccesoDatos.php");

						if(isset($_POST['idLegajoParaBorrar']))
						{
							$resultado= Persona::BorrarUnUsuario($_POST['idLegajoParaBorrar']);
						}


						$arrayUsuario= Persona::TraerTodosLosUsuarios();

						echo"<table border=1>
							<tr>
							<th colspan='2'> Acciones</th>
							<th>Usuario</th>
						";

						foreach ($arrayUsuario as $unUsuario) {
							
							echo"<tr>
							<td><button name='Borrar' onclick='Borrar($unUsuario->_id)'>Borrar</button></td>
							<td><button name='Modificar' onclick='Modificar($unUsuario->_id)'>Modificar</button></td>
							<td>$unUsuario->_usuario</td>
							</tr>";
						}

						echo"</table>";

					?>

					<form name="frmBorrar" method="post">
						<input type="text" name="idLegajoParaBorrar" id="idLegajoParaBorrar" hidden/>
					</form>

					<form name="frmModificar" method="post" action="AltaUsuario.php">
						<input type="text" name="idLegajoParaModificar" id="idLegajoParaModificar" hidden/>
					</form>

					<div class="col3">
						<u1>
							<li> <a href="AltaUsuario.php">Cargar un nuevo usuario </a> </li>
							<li> <a href="IndexCompleto.php">Volver al menu de inicio </a> </li>
						</u1>
					</div>
					<div class="clearer"></div>
				</div>
		</div>
	</div>

</div>
</body>

</html>
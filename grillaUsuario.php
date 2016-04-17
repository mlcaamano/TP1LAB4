<html>

<head>
	<head>
	<meta charset="utf-8">
	<title>Sala De Juegos</title>

	<!--Estilos-->
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" type="text/css" href="animacion.css">
	<!--final de Estilos-->
		<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
		<script src="app.js"></script>
		<script src="controladorBorrarModificar.js"></script>
	<!--Lógica-Programación-->
    <!--Final de Lógica-Programación -->
</head>

<body style="margin: 0 12%;" ng-app="MiApp" ng-controller="contBorrarModificar">

<div class="container">
	<div class="stripes"><span></span></div>
		<div class="main"><div class="inner_copy"></div>
				<div class="content">
						<table border=1>
							<tr>
								<th colspan='2'> Acciones</th>
								<th>Usuario</th>
							</tr>
							<tr ng-repeat="persona in ListadoPersonas">
								<td><button name='Borrar' ng-click='Borrar(persona._id)'>Borrar</button></td>
								<td><button name='Modificar' ng-click='Modificar(persona._id)'>Modificar</button></td>
								<td>{{persona._usuario}}</td>
							</tr>
						</table>

					<form name="frmBorrar" method="post">
						<input type="text" name="idLegajoParaBorrar" id="idLegajoParaBorrar" hidden/>
					</form>

					<form name="frmModificar" method="post" action="AltaUsuario.php">
						<input type="text" name="idLegajoParaModificar" id="idLegajoParaModificar" hidden/>
					</form>
					
					<div class="col3">
						<u1>
							<li> <a href="AltaUsuario.html">Cargar un nuevo usuario </a> </li>
							<li> <a href="index.php">Volver al menu de inicio </a> </li>
						</u1>
					</div>
					<div class="clearer"></div>
				</div>
		</div>
	</div>
</div>
</body>

</html>
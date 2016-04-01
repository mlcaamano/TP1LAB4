angapp.controller('ContPPT2', function($scope){

$scope.empatadas="0";
$scope.ganadas="0";
$scope.perdidas="0";

// $scope.eleccionMaquina="papel";

$scope.comenzar=function(){

		 	numeroSecreto =Math.floor( Math.random()*3)+1;
		//alert(numeroSecreto);
		switch(numeroSecreto)
		{
			case 1:
				$scope.eleccionMaquina="piedra";
				break;
			case 2:
				$scope.eleccionMaquina="papel";
				break;
			case 3:
				$scope.eleccionMaquina="tijera";
				break;

		}
}

$scope.verificar=function($eleccion){

	$scope.eleccionHumano=$eleccion;
	$scope.comenzar();
	alert("la maquina selecciono: "+$scope.eleccionMaquina);

	if($scope.eleccionHumano==$scope.eleccionMaquina)
	{
		alert("empate.");
		$scope.empatadas++;

	}
	else{
		if($scope.eleccionHumano=="papel")
		{
			if($scope.eleccionMaquina=="piedra")
			{
				alert("vos ganastes.");
				$scope.ganadas++;
			}
			else
			{
				alert("ganó la Maquina.");
				$scope.perdidas++;
			}
		}

		if($scope.eleccionHumano=="piedra")
		{
			if($scope.eleccionMaquina=="tijera")
			{
				alert("vos ganastes.");
				$scope.ganadas++;
			}
			else
			{
				alert("ganó la Maquina.");
				$scope.perdidas++;
			}
		}

		if($scope.eleccionHumano=="tijera")
		{
			if($scope.eleccionMaquina=="papel")
			{
				alert("vos ganastes.");
				$scope.ganadas++;
			}
			else
			{
				alert("ganó la Maquina.");
				$scope.perdidas++;
			}
		}
	}
}

// $scope.papel=function(){

// 	// alert("hola");
// 	$scope.comenzar();
// 	alert("la maquina selecciono: "+$scope.eleccionMaquina);
// 	$scope.eleccionHumano="papel";
// 	if($scope.eleccionHumano==$scope.eleccionMaquina)
// 	{
// 		alert("empate.");
// 		$scope.empatadas++;

// 	}
// 	else if($scope.eleccionMaquina=="piedra")
// 	{
// 		alert("vos ganastes.");
// 		$scope.ganadas++;
// 	}
// 	else
// 	{
// 		alert("ganó la Maquina.");
// 		$scope.perdidas++;
// 	}
//  }

// $scope.tijera=function(){

// 	// alert("hola");
// 	$scope.comenzar();
// 	alert("la maquina selecciono: "+$scope.eleccionMaquina);
// 	$scope.eleccionHumano="tijera";
// 	if($scope.eleccionHumano==$scope.eleccionMaquina)
// 	{
// 		alert("empate.");
// 		$scope.empatadas++;

// 	}
// 	else if($scope.eleccionMaquina=="papel")
// 	{
// 		alert("vos ganastes.");
// 		$scope.ganadas++;
// 	}
// 	else
// 	{
// 		alert("ganó la Maquina.");
// 		$scope.perdidas++;
// 	}
//  }

// $scope.piedra=function(){

// 	// alert("hola");
// 	$scope.comenzar();
// 	alert("la maquina selecciono: "+$scope.eleccionMaquina);
// 	$scope.eleccionHumano="piedra";
// 	if($scope.eleccionHumano==$scope.eleccionMaquina)
// 	{
// 		alert("empate.");
// 		$scope.empatadas++;

// 	}
// 	else if($scope.eleccionMaquina=="tijera")
// 	{
// 		alert("vos ganastes.");
// 		$scope.ganadas++;
// 	}
// 	else
// 	{
// 		alert("ganó la Maquina.");
// 		$scope.perdidas++;
// 	}
//  }




// $scope.papel();







});
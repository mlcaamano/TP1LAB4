var angapp=angular.module("MiApp",[]);
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

$scope.papel=function(){

	// alert("hola");
	$scope.comenzar();
	alert("la maquina selecciono: "+$scope.eleccionMaquina);
	$scope.eleccionHumano="papel";
	if($scope.eleccionHumano==$scope.eleccionMaquina)
	{
		alert("empate.");
		$scope.empatadas++;

	}
	else if($scope.eleccionMaquina=="piedra")
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
// $scope.papel();







});
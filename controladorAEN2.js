angapp.controller('ContAEN2', function($scope){

$scope.contador="0";


$scope.comenzar=function(){
		numeroSecreto =Math.floor( Math.random()*100)+1;
		$scope.eleccionMaquina=numeroSecreto;
}

$scope.verificar=function(){

	$scope.eleccionHumano=$scope.ingresar;
	

	if($scope.eleccionHumano==$scope.eleccionMaquina)
	{
		alert("Usted a acertado");

		switch($scope.contador)
		{
			case 1:
				alert("usted es un Psíquico");
				break;
			case 2:
				alert("excelente percepción");
				break;
			case 3:
				alert("Esto es suerte");
				break;
			case 4:
				alert("Excelente técnica");
				break;
			case 5:
				alert("usted está en la media");
				break;
			case 6:
				alert("falta técnica");
				break;
			case 7:
				alert("falta técnica");
				break;
			case 8:
				alert("falta técnica");
				break;
			case 9:
				alert("falta técnica");
				break;
			case 10:
				alert("falta técnica");
				break;
			default:
				alert("afortunado en el amor!!");
				break;
		}

	}
	else
	{
		$scope.contador++;

		if($scope.eleccionMaquina < $scope.eleccionHumano)
		{
			alert("Un poco menos");	
		}
		else
		{
			alert("Se quedo corto");
		}

	}
}
});
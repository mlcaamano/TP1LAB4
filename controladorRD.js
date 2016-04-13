angapp.controller('ContRD', function($scope){


//var temp=0;
var tiempo=new Date();

$scope.comenzar=function(){

	colorSecreto =Math.floor( Math.random()*6)+1;

	switch(colorSecreto)
	{
		case 1:
			$scope.colorMaquina="Azul";
			break;
		case 2:
			$scope.colorMaquina="Amarillo";
			break;
		case 3:
			$scope.colorMaquina="Marron";
			break;
		case 4:
			$scope.colorMaquina="Verde";
			break;
		case 5:
			$scope.colorMaquina="Celeste";
			break;
		case 6:
			$scope.colorMaquina="Rojo";
			break;
	}

	alert("La maquina eligio:"+$scope.colorMaquina)
	
	msg1=tiempo.getTime()
}


$scope.responder=function($eleccion){

	$scope.eleccionHumano=$eleccion;

	if($scope.eleccionHumano==$scope.colorMaquina)
	{
		alert("Usted a acertado");
		msg2=Math.round(tiempo.getTime()/1000);
		alert(msg2);
	}
	else
	{
		alert("Error.");
	}
}

});
angapp.controller('contAlta', function($scope, $http) {
  $scope.DatoTest="**alta**";

// //inicio las variables
//   $scope.persona={};
//   $scope.persona.nombre= "natalia" ;
//   $scope.persona.dni= "12312312" ;
//   $scope.persona.apellido= "natalia" ;
//   $scope.persona.foto="sinfoto";


  $scope.guardar=function(){

    $scope.persona={};
    $scope.persona._id=$scope.id;
    $scope.persona._usuario=$scope.usuario;
    $scope.persona._clave=$scope.clave;

  	console.log("persona a guardar:");
    console.log($scope.persona);
    $http.post('nexo.php', { datos: {accion :"insertar",persona:$scope.persona}})
 	  .then(function(respuesta) {     	
 		     //aca se ejetuca si retorno sin errores      	
      	 console.log(respuesta.data);

    },function errorCallback(response) {     		
     		//aca se ejecuta cuando hay errores
     		console.log( response);     			
 	  });

  

  }
});
angapp.controller('contBorrarModificar', function($scope, $http) {
  	$scope.DatoTest="**grilla**";
 	
    function bien(respuesta)
    {
        $scope.ListadoPersonas = respuesta.data.listado;
        console.log(respuesta.data);
    }

    function mal(respuesta)
    {
        $scope.ListadoPersonas= [];
        console.log( response);
    }

  $http.get('PHP/nexo.php', { params: {accion :"traer"}})
  .then(bien, mal);

 	
$scope.Borrar=function(persona){

	console.log("borrar"+persona);

    $http.post("PHP/nexo.php",{datos:{accion :"borrar",persona:persona}},{headers: {'Content-Type': 'application/x-www-form-urlencoded'}})
    .then(function(respuesta) {       
        console.log(respuesta.data);
        $http.get('PHP/nexo.php', { params: {accion :"traer"}})
        .then(function(respuesta) {       
            $scope.ListadoPersonas = respuesta.data.listado;
            console.log(respuesta.data);
        },function errorCallback(response) {
            $scope.ListadoPersonas= [];
            console.log( response);
        });
    },function errorCallback(response) {        
        //aca se ejecuta cuando hay errores
        console.log( response);           
    });
}




 	$scope.Modificar=function(id){
 		
 		console.log("Modificar"+id);
 	}





});
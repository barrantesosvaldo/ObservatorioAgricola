app.controller('ubicacionesController', function($scope, $http, API_URL) {
    
    //devuelve la lista de cantones desde la API
    $http.get(API_URL + "canton").success(function(response) {
    	$scope.cantones = response;
    });

    //devuelve la lista de cantones desde la API
    $scope.obtenerDistritos = function(id) {
    	$http.get(API_URL + "distrito/" + id).success(function(response) {
    		$scope.distritos = response;
    	});	
    };

    $scope.$watch('precio.idCanton', function(idViejo, idNuevo) {
    	$scope.obtenerDistritos(idNuevo);
    });


    
});
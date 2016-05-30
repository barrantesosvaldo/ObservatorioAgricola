app.controller('menuController', function($auth, $scope, $location) {
	
	// redirige a la página indicada
	$scope.setRoute = function(route) {
		$location.path(route);
	};


	// cierra la sesión del usuario y lo redirige a la página de inicio de sesión
	$scope.cerrarSesion = function(route) {

		$auth.logout().then(function() {
			$location.path(route);
		}, function(error) {
			console.log(error);
		});
	}
});
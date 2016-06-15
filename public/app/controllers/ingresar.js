app.controller('ingresarController', function($auth, $scope, $location) {
	
	$scope.ingresar = function() {

		var credentials = {
			email: $scope.email,
			password: $scope.password
		}

		$auth.login(credentials).then(function(data) {
			$location.path('bienvenido');
		}, function(error) {
			$scope.mensaje = "Error iniciando sesión.";
			console.log(error);
		});
	}
});
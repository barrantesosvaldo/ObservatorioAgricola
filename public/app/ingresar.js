app.controller('ingresarController', function($state, $auth) {
	
	/*$scope.ingresar = function() {
		console.log("entra");
		$scope.credentials = {
			email: $scope.email;
			password: $scope.password;
		}

		$auth.login(credentials).then(function(data) {
			$state.go('bienvenido');
		}, function(error) {
			console.log(error);
		});
	}*/

	var vm = this;

		vm.login = function() {

			var credentials = {
				email: vm.email,
				password: vm.password
			}

			// Use Satellizer's $auth service to login
			$auth.login(credentials).then(function(data) {

				// If login is successful, redirect to the users state
				$state.go('bienvenido');
			}, function(error) {
				console.log(error);
			});
		}
});
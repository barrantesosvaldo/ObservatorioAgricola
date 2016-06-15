var app = angular.module('observatorio_agropecuario', ['ngAnimate', 'ngRoute', 'satellizer', 
	'ui.bootstrap', 'googlechart'/*, 'uiGmapgoogle-maps'*/])
	.constant('API_URL', 'http://localhost/observatorio-agricola/public/api/v1/')
	.config(function($routeProvider, $authProvider, $locationProvider) {
			
			// configuración de Satellizer
			$authProvider.loginUrl = 'http://localhost/observatorio-agricola/public/api/v1/authenticate';

			// redireccionamiento de la aplicaición
	       	$routeProvider
			.when('/bienvenido', {
				templateUrl:'partials/bienvenido.php'
			})
			.when('/precios', {
				templateUrl:'partials/precios.php'
			})
			.when('/excel', {
				templateUrl:'partials/excel.php'
			})
			.when('/estadistica', {
				templateUrl:'partials/estadistica.php'
			})
			.when('/geoportal', {
				templateUrl:'partials/geoportal.php'
			})
			.when('/registro_usuarios', {
				templateUrl:'partials/registro.php'
			})
			.when('/ingresar', {
				templateUrl:'partials/ingresar.php'
			})
			.otherwise({
				redirectTo:'/ingresar', 
				templateUrl:'partials/ingresar.php'
			});

	})
var app = angular.module('observatorio_agropecuario', ['ngAnimate', 'ngRoute', 'ui.bootstrap', 
	'googlechart', 'uiGmapgoogle-maps'])
	.constant('API_URL', 'http://localhost/observatorio-agricola/public/api/v1/')
	.config(function($routeProvider, $locationProvider/*$stateProvider, $urlRouterProvider*/) {
			'use strict';
	       	$routeProvider
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
			.when('/ingresar', {
				templateUrl:'partials/ingresar.php'
			})
			.otherwise({
				redirectTo:'/bienvenido', 
				templateUrl:'partials/bienvenido.php'
			});
			/*$stateProvider
		    .state("precios", {
		      url: "/precios",
		      templateUrl: "partials/precios.php",
		      controller: "preciosController",
		      authenticate: true
		    })
		    .state("excel", {
		      url: "/excel",
		      templateUrl: "partials/excel.php",
		      controller: "excelController",
		      authenticate: true
		    })
		    .state("estadistica", {
		      url: "/estadistica",
		      templateUrl: "partials/estadistica.php",
		      controller: "estadisticaController",
		      authenticate: true
		    })
		    .state("geoportal", {
		      url: "/geoportal",
		      templateUrl: "partials/geoportal.php",
		      controller: "geoportalController",
		      authenticate: true
		    })
		    .state("ingresar", {
		      url: "/ingresar",
		      templateUrl: "partials/ingresar.php",
		      controller: "ingresarController",
		      authenticate: false
		    });*/
		  // Send to login if the URL was not found
		  //$urlRouterProvider.otherwise("/bienvenido");

	})
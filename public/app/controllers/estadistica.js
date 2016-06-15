app.controller('estadisticaController', function($scope, $filter, $timeout, $http, API_URL	) {

	$scope.id_tipo_producto = "";
    
    //devuelve la lista de tipos de productos
    $http.get(API_URL + "tipo-producto").success(function(response) {
        $scope.tiposProducto = response;
    });

	//devuelve la lista de productos, unidades de venta y procedencias de un tipo de producto seleccionado
    $scope.obtenerProductos = function(id) {
        //productos
        $http.get(API_URL + "productos/" + id).success(function(response) {
            $scope.productos = response;
            $scope.id_producto = "";
        });
    };  

    //carga el gráfico con una fecha específica.
	$scope.cargarGrafico = function() {

		var fecha = $filter('date')($scope.estadistica.fecha, "yyyy-MM-dd");

		$http.get(API_URL + "precios/media-fecha/" + $scope.estadistica.id_producto + "/" + fecha).success(function(response) {
	        precios = response;

	    	var cantidadFilas = precios.length;
	    	var datos = new google.visualization.DataTable();
	    	var filas = new Array();

			datos.addColumn('string', 'Fecha');
			datos.addColumn('number', 'Precio promedio');

			for(var i = 0; i < cantidadFilas; i++) {
		    	filas.push([fecha, precios[i].media_precios]);
		    }

		    datos.addRows(filas);

		    var chart = {};
    		chart.type = "BarChart";

    		chart.data = datos;

    		chart.options = {
    			title: 'Evolución de precios de productos',
    			hAxis: {title: 'Precios promedio'},
    			vAxis: {title: 'Fecha'}
		    };

	    	chart.formatters = {
	    		number : [{
	        		columnNum: 1,
	        		pattern: "₡ #,###.00"
	      		}]
	    	};

		    $scope.chartCuadroEvolutivo = chart;
    	});
	};

});
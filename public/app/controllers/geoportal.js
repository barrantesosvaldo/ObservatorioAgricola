app.controller('geoportalController', function($scope, $http, API_URL) {

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
});
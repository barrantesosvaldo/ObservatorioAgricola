app.controller('preciosController', function($scope, $filter, $timeout, $http, API_URL) {

    
    //muestra el modal para agregar o editar precios
    $scope.toggle = function(modalstate, id) {
        $scope.modalstate = modalstate;

        switch (modalstate) {
            case 'add':
                $scope.form_title = "Agregar Precio";
                $scope.precio = undefined;
                $scope.cantones = undefined;
                $scope.distritos = undefined;
                $scope.productos = undefined;
                $scope.unidadesVenta = undefined;
                $scope.ubicacion_exacta = undefined;
                $scope.productos = undefined;

                break;
            case 'edit':
                $scope.form_title = "Editar Precio";
                $scope.id = id;
                $http.get(API_URL + 'precio/' + id)
                        .success(function(response) {
                            $scope.precio = response;

                            //carganado listas previas
                            $scope.obtenerProductosYUnidadesVenta($scope.precio.id_tipo_producto);
                            $scope.obtenerCantones($scope.precio.id_provincia);
                            $scope.obtenerDistritos($scope.precio.id_canton);

                            //convirtiendo ids a tipo string
                            $scope.precio.id_tipo_producto += "";
                            $scope.precio.id_producto += "";
                            $scope.precio.id_provincia += "";
                            $scope.precio.id_canton += "";
                            $scope.precio.id_distrito += "";
                            $scope.precio.id_procedencia += "";
                            $scope.precio.id_unidad_venta += "";

                            //dando formato a la fecha
                            var fecha = new Date($scope.precio.fecha+"T00:00:00Z");
                            var tiempo = fecha.getTime();
                            var tiempoRestante = fecha.getTimezoneOffset() * 60000;
                            $scope.precio.fecha = new Date(tiempo + tiempoRestante);
                        });
                break;
            default:
                break;
        };
        
        $('#myModal').modal('show');
    };

    //devuelve la lista de precios 
    $http.get(API_URL + "precios").success(function(response) {
        $scope.precios = response;
        console.log(response);
    });


    //devuelve la lista de tipos de productos
    $http.get(API_URL + "tipo-producto").success(function(response) {
        $scope.tiposProducto = response;
    });

    //devuelve la lista de provincias
    $http.get(API_URL + "provincia").success(function(response) {
        $scope.provincias = response;
    });

    //devuelve la lista de productos, unidades de venta y procedencias de un tipo de producto seleccionado
    $scope.obtenerProductosYUnidadesVenta = function(id) {
        
        console.log("precios");
        //productos
        $http.get(API_URL + "productos/" + id).success(function(response) {
            $scope.productos = response;
        });

        //unidades de venta
        $http.get(API_URL + "unidad-venta/" + id).success(function(response) {
            $scope.unidadesVenta = response;
        });

        //procedencias
        $http.get(API_URL + "procedencia/" + id).success(function(response) {
            $scope.procedencias = response;
        });
    };    

    //devuelve la lista de cantones de una provincia seleccionada
    $scope.obtenerCantones = function(id) {
        $http.get(API_URL + "cantones/" + id).success(function(response) {
            $scope.cantones = response;
        });
    };

    //devuelve la lista de distritos de un cantón seleccionado
    $scope.obtenerDistritos = function(id) {
        $http.get(API_URL + "distritos/" + id).success(function(response) {
            $scope.distritos = response;
        });
    };

    //guarda el nuevo precio / actualiza un precio ya establecido 
    $scope.guardar = function(modalstate, id) {
        var url = API_URL + "precio";
        
        //añade el id del precio al URL para editarlo si el modal está en modo edición
        if (modalstate === 'edit'){
            url += "/" + id;
        }
        $scope.precio.fecha = $filter('date')($scope.precio.fecha, "yyyy-MM-dd");
        $http({
            method: 'POST',
            url: url,
            data: $.param($scope.precio),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(response) {
            console.log("Precio registrado satisfactoriamente");
            location.reload();
        }).error(function(response) {
            console.log(response);
            alert("Error salvando los datos");
        });
    }

    //elimina el precio
    $scope.eliminar = function(id) {
        var isConfirmDelete = confirm('¿Estás seguro que deseas eliminar este precio?');

        if (isConfirmDelete) {
            $http({
                method: 'DELETE',
                url: API_URL + 'precio/' + id
            }).
                    success(function(data) {
                        console.log(data);
                        location.reload();
                    }).
                    error(function(data) {
                        console.log(data);
                        alert('Error al eliminar');
                    });
        } else {
            return false;
        }
    }
});
app.controller('excelController', function($scope, $http, API_URL) {

	//devuelve la lista de productos
    $http.get(API_URL + "productos").success(function(response) {
        $scope.productos = response;
    });

    //devuelve la lista de distritos
    $http.get(API_URL + "distritos").success(function(response) {
        $scope.distritos = response;
    });

    //devuelve la lista de procedencias
    $http.get(API_URL + "procedencias").success(function(response) {
        $scope.procedencias = response;
    });

    //devuelve la lista de unidades de venta
    $http.get(API_URL + "unidades-venta").success(function(response) {
        $scope.unidades_venta = response;
    });

	$scope.xlsxFile = function (files) {
        handleFile(files);
    }

    $scope.guardar_precios = function () {
    	var url = API_URL + "precios";

        $http({
            method: 'POST',
            url: url,
            data: $scope.precios_json,
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(response) {
            location.reload();
            alert(response);
            console.log(response);
        }).error(function(response) {
            console.log(response);
            alert("Error guardando los datos");
        });
    }

    /* Convertir archivo xlsx a objecto Json */
    /* Inicio XLSX-JSON */
    var X = XLSX;

	function fixdata(data) {
		var o = "", l = 0, w = 10240;
		for(; l<data.byteLength/w; ++l) o+=String.fromCharCode.apply(null,new Uint8Array(data.slice(l*w,l*w+w)));
		o+=String.fromCharCode.apply(null, new Uint8Array(data.slice(l*w)));
		return o;
	}

	function to_json(workbook) {
		var result = {};
		workbook.SheetNames.forEach(function(sheetName) {
			var roa = X.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
			if(roa.length > 0){
				result[sheetName] = roa;
			}
		});
		$scope.precios_json = result.Precios;
	}

	function process_wb(wb) {
		to_json(wb);
		cargar_pantalla();
	}

	function handleFile(files) {
		var f = files[0];
		{
			var reader = new FileReader();
			var name = f.name;
			reader.onload = function(e) {
				var data = e.target.result;
					var wb;
					var arr = fixdata(data);
						wb = X.read(btoa(arr), {type: 'base64'});
					process_wb(wb);
			};
			reader.readAsArrayBuffer(f);
		}
	}
	/* Fin XLSX-JSON */

	function cargar_pantalla() {
		$scope.precios = [];
		for (i = 0; i < $scope.precios_json.length; i++) {
			$scope.precios[i] = {};
			var index_productos = $scope.precios_json[i].id_producto;
			var index_distritos = $scope.precios_json[i].id_distrito;
			var index_procedencias = $scope.precios_json[i].id_procedencia;
			var index_unidades_venta = $scope.precios_json[i].id_unidad_venta;
			$scope.precios[i].producto = obtener_producto(index_productos);
			$scope.precios[i].distrito = $scope.distritos[index_distritos-1].nombre;
			$scope.precios[i].ubicacion_exacta = $scope.precios_json[i].ubicacion_exacta;
			$scope.precios[i].procedencia = obtener_procedencia(index_procedencias);
			$scope.precios[i].valor_unidad_venta = $scope.precios_json[i].valor_unidad_venta;
			$scope.precios[i].unidad_venta = obtener_unidad_venta(index_unidades_venta);
			$scope.precios[i].precio = $scope.precios_json[i].precio;
			$scope.precios[i].fecha = $scope.precios_json[i].fecha;
		}
		$scope.$apply();
	}

	function obtener_producto(id_producto) {
		for (j = 0; j < $scope.productos.length; j++) {
			if (id_producto == $scope.productos[j].id) {
				return $scope.productos[j].nombre;
			}
		}
	}

	function obtener_procedencia(id_procedencia) {
		for (k = 0; k < $scope.procedencias.length; k++) {
			if (id_procedencia == $scope.procedencias[k].id) {
				return $scope.procedencias[k].nombre;
			}
		}
	}

	function obtener_unidad_venta(id_unidad_venta) {
		for (l = 0; l < $scope.unidades_venta.length; l++) {
			if (id_unidad_venta == $scope.unidades_venta[l].id) {
				return $scope.unidades_venta[l].unidad;
			}
		}
	}

});
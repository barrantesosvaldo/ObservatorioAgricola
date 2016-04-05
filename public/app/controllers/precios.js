app.controller('preciosController', function($scope, $http, API_URL) {

    
    //show modal form
    $scope.toggle = function(modalstate, id) {
        $scope.modalstate = modalstate;

        switch (modalstate) {
            case 'add':
                $scope.form_title = "Agregar Precio";
                break;
            case 'edit':
                $scope.form_title = "Employee Detail";
                $scope.id = id;
                $http.get(API_URL + 'employees/' + id)
                        .success(function(response) {
                            console.log(response);
                            $scope.employee = response;
                        });
                break;
            default:
                break;
        }
        console.log(id);
        $('#myModal').modal('show');
    }

    //devuelve la lista de cantones desde la API
    $http.get(API_URL + "canton").success(function(response) {
        $scope.cantones = response;
    });

    $scope.obtenerDistritos = function(id) {
        $http.get(API_URL + "distrito/" + id).success(function(response) {
            $scope.distritos = response;
        });

    };


});
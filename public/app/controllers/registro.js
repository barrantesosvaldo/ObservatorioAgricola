app.controller('registroController', function($scope, $http, API_URL) {

	//guarda el nuevo usuario 
    $scope.guardar = function() {
        var url = API_URL + "registro_usuario";

        if ($scope.usuario.contrasenna === $scope.usuario.confirmarContrasenna) {
            console.log($scope.usuario);
            $http({
                method: 'POST',
                url: url,
                data: $.param($scope.usuario),
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(response) {
                console.log("Usuario registrado satisfactoriamente");
                location.reload();
            }).error(function(response) {
                console.log(response);
                alert("Error salvando los datos");
            });
        } else {
            alert("Contraseñas no coincden.");
        }
    };
});
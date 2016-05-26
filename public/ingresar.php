<!DOCTYPE html>
<html lang="es-CR" ng-app="observatorio_agropecuario">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">

        <title>Observatorio Agropecuario</title>

    </head>
    <body ng-controller="ingresarController">

        <div class="container">
        	<div class="jumbotron" style="margin-top: 5%; margin-left: 20%; width: 60%;">
			    <h2>Autenticación de usuarios</h2>

			    <form name="frmIngresar" class="form-horizontal" novalidate="">

				    <div class="form-group">
	                    <div>
	                        <input type="text" class="form-control" id="txtNombreUsuario" placeholder="Nombre de usuario" 
	                        ng-model="nombre_usuario" ng-required="true">
	                    </div>
	                </div>

				    <div class="form-group">
	                    <div>
	                        <input type="password" class="form-control" id="txtContrasenna" placeholder="Contraseña" 
	                        ng-model="contrasenna" ng-required="true">
	                    </div>
	                </div>

				    <div class="form-group">
	                    <div>
	                        <button type="button" class="btn btn-primary" id="btn-ingresar" ng-click="ingresar()" ng-disabled="frmIngresar.$invalid">Ingresar</button>
	                    </div>
	                </div>
	            </form>
			</div>
        </div>

        <!-- Librerías (AngularJS, UI-Bootstrap, JQuery, Bootstrap) -->
        <script src="<?= asset('app/lib/angular/angular.js') ?>"></script> <!-- angular.min.js -->
        <script src="<?= asset('app/lib/angular/angular-animate.js') ?>"></script> <!-- angular-animate.min.js -->
        <script src="<?= asset('app/lib/angular/angular-locale_es-cr.js') ?>"></script>
        <script src="<?= asset('app/lib/angular/angular-route.js') ?>"></script> <!-- angular-route.min.js -->
        <script src="<?= asset('app/lib/angular/angular-touch.js') ?>"></script>
        <script src="<?= asset('app/lib/angular/angular-ui-router.js') ?>"></script>
        <script src="<?= asset('app/lib/satellizer/satellizer.js') ?>"></script>
        <script src="<?= asset('app/lib/googlechart/ng-google-chart.js') ?>"></script>
        <script src="<?= asset('js/jquery.min.js') ?>"></script>
        <script src="<?= asset('app/lib/ui-bootstrap/ui-bootstrap-tpls-1.3.2.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>

        <!-- Controladores de la aplicación AngularJS -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/ingresar.js') ?>"></script>

    </body>
</html>


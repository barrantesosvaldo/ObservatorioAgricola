<!DOCTYPE html>
<html lang="es-CR" ng-app="observatorio_agropecuario">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= asset('css/map-style.css') ?>" rel="stylesheet">

        <style>        
            #map {
                height: 100vh;
            }
        </style>

        <title>Observatorio Agropecuario</title>

    </head>

    <body class="container-fluid" ng-controller="menuController">

        <nav class="navbar navbar-default">
            <div class="conteiner-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myBar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Observatorio Agropecuario</a>
                </div>

                <div class="collapse navbar-collapse" id="myBar">
                    <ul class="nav navbar-nav">
                        <li><a ng-click="setRoute('bienvenido')" class="btn">Principal</a></li>
                        <li><a ng-click="setRoute('precios')" class="btn">Precios</a></li>
                        <li><a ng-click="setRoute('excel')" class="btn">Agregar Excel</a></li>
                        <li><a ng-click="setRoute('estadistica')" class="btn">Estadística</a></li>
                        <li><a ng-click="setRoute('geoportal')" class="btn">Geoportal</a></li>
                        <li><a ng-click="setRoute('registro_usuarios')" class="btn">Registrar Usuarios</a></li>
                        <li><a ng-click="setRoute('ingresar')" class="btn">Ingresar</a></li>
                        <li><a ng-click="cerrarSesion('ingresar')" class="btn">Cerrar sesión</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>

        <div class="container">
            <div ng-view></div>
        </div>



        <!-- Librerías (AngularJS, UI-Bootstrap, JQuery, Bootstrap) -->
        <script src="<?= asset('app/lib/angular/angular.js') ?>"></script>
        <script src="<?= asset('app/lib/angular/angular-animate.js') ?>"></script>
        <script src="<?= asset('app/lib/angular/angular-locale_es-cr.js') ?>"></script>
        <script src="<?= asset('app/lib/angular/angular-route.js') ?>"></script>
        <script src="<?= asset('app/lib/angular/angular-touch.js') ?>"></script>
        <script src="<?= asset('app/lib/angular/angular-ui-router.js') ?>"></script>

        <script src="<?= asset('app/lib/googlechart/ng-google-chart.js') ?>"></script>
        <script src="<?= asset('app/lib/ui-bootstrap/ui-bootstrap-tpls-1.3.2.js') ?>"></script>
        <script src="<?= asset('app/lib/satellizer/satellizer.js') ?>"></script>
        <script src="<?= asset('js/jquery.min.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
        <script src="<?= asset('js/xlsx.core.min.js') ?>"></script>

        <!-- Controladores de la aplicación AngularJS -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/menu.js') ?>"></script>
        <script src="<?= asset('app/controllers/precios.js') ?>"></script>
        <script src="<?= asset('app/controllers/excel.js') ?>"></script>
        <script src="<?= asset('app/controllers/estadistica.js') ?>"></script>
        <script src="<?= asset('app/controllers/geoportal.js') ?>"></script>
        <script src="<?= asset('app/controllers/ingresar.js') ?>"></script>
        <script src="<?= asset('app/controllers/mi-datepicker.js') ?>"></script>
        <script src="<?= asset('app/controllers/registro.js') ?>"></script>

    </body>
</html>
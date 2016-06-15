<div ng-controller="estadisticaController">

	<nav class="navbar navbar-default nav-stacked">
        <div class="conteiner-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myBar2" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Evolución de precios del producto</a>
            </div>

            <div class="collapse navbar-collapse" id="myBar2">
                <ul class="nav navbar-nav" style="padding-top: 8px;">
                    <select class="form-control" id="slETipoProducto" ng-model="estadistica.id_tipo_producto" ng-required="true" ng-change="obtenerProductos(estadistica.id_tipo_producto)">
                    	<option value="">---Seleccione un Tipo de Producto---</option>
                    	<option ng-repeat="tipoProducto in tiposProducto" value="{{ tipoProducto.id }}">{{ tipoProducto.nombre }}</option>
                    </select>
                </ul>
                <ul class="nav navbar-nav" style="padding-top: 8px;">
                    <select class="form-control" id="slEProducto" ng-model="estadistica.id_producto" ng-required="true">
                    	<option value="">---Seleccione un Producto---</option>
                    	<option ng-repeat="producto in productos" value="{{ producto.id }}">{{ producto.nombre }}</option>
                    </select>
                </ul>

                <ul class="nav navbar-nav" style="padding-top: 8px;">
                    <p class="input-group" ng-controller="miDatepickerController">
                        <input type="text" class="form-control" id="txtFecha" placeholder="Fecha de vigencia del precio" ng-model="estadistica.fecha" ng-required="true" uib-datepicker-popup  is-open="popup.opened" datepicker-options="dateOptions"  close-text="Cerrar" />
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default" ng-click="open()">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </button>
                      </span>
                    </p>
                </ul>
                <ul class="nav navbar-nav" style="padding-top: 8px;">
                    <button type="button" class="btn btn-primary" id="btn-cargar" ng-click="cargarGrafico()" >Cargar</button>
                </ul>
            </div>
        </div>
    </nav>

	<div google-chart chart="chartCuadroEvolutivo"></div>
</div>
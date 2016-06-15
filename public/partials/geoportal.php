<div ng-controller="geoportalController" style="height: 80vh;">
	
	<nav class="navbar navbar-default nav-stacked">
        <div class="conteiner-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myBar3" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Ubicación de precios del producto</a>
            </div>

            <div class="collapse navbar-collapse" id="myBar3">
                <ul class="nav navbar-nav" style="padding-top: 8px;">
                    <select class="form-control" id="slGTipoProducto" ng-model="geoportal.id_tipo_producto" ng-required="true" ng-change="obtenerProductos(geoportal.id_tipo_producto)">
                    	<option value="">---Seleccione un Tipo de Producto---</option>
                    	<option ng-repeat="tipoProducto in tiposProducto" value="{{ tipoProducto.id }}">{{ tipoProducto.nombre }}</option>
                    </select>
                </ul>
                <ul class="nav navbar-nav" style="padding-top: 8px;">
                    <select class="form-control" id="slGProducto" ng-model="geoportal.id_producto" ng-required="true">
                    	<option value="">---Seleccione un Producto---</option>
                    	<option ng-repeat="producto in productos" value="{{ producto.id }}">{{ producto.nombre }}</option>
                    </select>
                </ul>

                <ul class="nav navbar-nav" style="padding-top: 8px;">
                    <button type="button" class="btn btn-primary" id="btn-cargar" onclick="setMarkers()" >Cargar</button>
                    <button type="button" class="btn btn-danger" id="btn-limpiar" onclick="removeMarkers()" >Limpiar</button>
                </ul>
            </div>
        </div>
    </nav>

	<iframe id="imap" src="http://localhost/observatorio-agricola/public/partials/mapa.php" height="100%" width="100%"></iframe>

	<script>
		$("#imap")[0].contentWindow.setMarkers();
		$("#imap")[0].contentWindow.removeMarkers();
	</script>
</div>
<!DOCTYPE html>
<html lang="en-US" ng-app="observatorio_agropecuario">
    <head>
        <title>Observatorio Agropecuario</title>

        <!-- Load Bootstrap CSS -->
        <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet">
    </head>
    <body>
        <h2>Observatorio Agropecuario</h2>

        <!-- Table-to-load-the-data Part -->
        <table class="table" ng-controller="preciosController">
            <thead>
                <tr>
                    <th>Tipo de Producto</th>
                    <th>Nombre del Produdcto</th>
                    <th>Unidad de Venta</th>
                    <th>Ubicación Exacta</th>
                    <th>Precio</th>
                    <th>Fecha</th>
                    <th>
                        <button id="btnAgregar" class="btn btn-primary btn-xs" ng-click="toggle('add', -1)">Agregar Precio</button>
                    </th>
                </tr>
            </thead>
             <tbody>
                <tr ng-repeat="precio in precios">
                    <td>{{ precio.idTipoProducto }}</td>
                    <td>{{ precio.idProducto }}</td>
                    <td>{{ precio.idUnidadVenta }}</td>
                    <td>{{ precio.idUbicacionExacta }}</td>
                    <td>{{ precio.precio }}</td>
                    <td>{{ precio.fecha }}</td>

                    <td>
                        <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', precio.id)">Edit</button>
                        <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(precio.id)">Delete</button>
                    </td>
                </tr>
            </tbody> 
        </table>
        <!-- End of Table-to-load-the-data Part -->

        <!-- Modal (Pop up when detail button clicked) -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">{{form_title}}</h4>
                    </div>

                    <div class="modal-body">
                        <form name="frmPrecios" class="form-horizontal" novalidate="">

                            <div class="form-group error">
                                <label for="lblTipoProducto" class="col-sm-3 control-label">Tipo de producto</label>
                                <div class="col-sm-9" ng-controller="productosController">
                                    <select class="form-control has-error" id="slTipoProducto" ng-repeat="tipoProducto in TiposProducto" ng-model="precio.idTipoProducto" ng-required="true">
                                      <option>{{ tiposProducto.nombre }}</option>>
                                    </select>
                                    <span class="help-inline" 
                                    ng-show="frmPrecios.slTipoProducto.$invalid && frmPrecios.slTipoProducto.$touched">Debe seleccionar un tipo de producto</span>
                                </div>
                            </div>

                            <div class="form-group error">
                                <label for="lblProducto" class="col-sm-3 control-label">Producto</label>
                                <div class="col-sm-9" ng-controller="productosController">
                                    <select class="form-control has-error" id="slProducto" ng-repeat="producto in productos" ng-model="precio.idProducto" ng-required="true">
                                      <option>{{ producto.nombre }}</option>>
                                    </select>
                                    <span class="help-inline" 
                                    ng-show="frmPrecios.slProducto.$invalid && frmPrecios.slProducto.$touched">Debe seleccionar un producto</span>
                                </div>
                            </div>

                            <div class="form-group error">
                                <label for="lblCanton" class="col-sm-3 control-label">Cantón</label>
                                <div class="col-sm-9" ng-controller="ubicacionesController">
                                    <select class="form-control has-error" id="slCanton" ng-repeat="canton in cantones" ng-model="precio.idCanton" ng-required="true">
                                      <option>{{ canton.nombre }}</option>>
                                    </select>
                                    <span class="help-inline" 
                                    ng-show="frmPrecios.slCanton.$invalid && frmPrecios.slCanton.$touched">Debe seleccionar un cantón</span>
                                </div>
                            </div>

                            <div class="form-group error">
                                <label for="lblDistrito" class="col-sm-3 control-label">Distrito</label>
                                <div class="col-sm-9" ng-controller="ubicacionesController">
                                    <select class="form-control has-error" id="slDistrito" ng-repeat="distrito in distritos" ng-model="precio.idDistrito" ng-required="true">
                                      <option>{{ distrito.nombre }}</option>>
                                    </select>
                                    <span class="help-inline" 
                                    ng-show="frmPrecios.slDistrito.$invalid && frmPrecios.slDistrito.$touched">Debe seleccionar un distrito</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lblUbicacionExacta" class="col-sm-3 control-label">Ubicación exacta</label>
                                <div class="col-sm-9" ng-controller="ubicacionesController">
                                    <input type="text" class="form-control" id="txtUbicacionExacta" placeholder="Ubicación exacta" value="{{ubicacionExacta}}" 
                                    ng-model="ubicacionExacta.nombre" ng-required="false">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lblValor" class="col-sm-3 control-label">Cantidad en unidades de venta</label>
                                <div class="col-sm-9" ng-controller="unidadesVentaController">
                                    <input type="text" class="form-control" id="txtUnidadVenta" placeholder="Unidad de venta" value="{{valor}}" 
                                    ng-model="unidadVenta.valor" ng-required="true">
                                    <span class="help-inline" 
                                    ng-show="frmPrecios.txtUnidadVenta.$invalid && frmPrecios.txtUnidadVenta.$touched">Debe ingresar la cantidad en unidades de venta del producto</span>
                                </div>
                            </div>

                            <div class="form-group error">
                                <label for="lblUnidadVenta" class="col-sm-3 control-label">Unidad de venta</label>
                                <div class="col-sm-9" ng-controller="unidadesVentaController">
                                    <select class="form-control has-error" id="slUnidadVenta" ng-repeat="unidadVenta in unidadesVenta" ng-model="unidadVenta.idUnidadVenta" ng-required="true">
                                      <option>{{ unidadVenta.nombre }}</option>>
                                    </select>
                                    <span class="help-inline" 
                                    ng-show="frmPrecios.slUnidadVenta.$invalid && frmPrecios.slUnidadVenta.$touched">Debe seleccionar una unidad de venta</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lblPrecio" class="col-sm-3 control-label">Precio</label>
                                <div class="col-sm-9" ng-controller="preciosController">
                                    <input type="text" class="form-control" id="txtPrecio" placeholder="Precio del producto" value="{{precio}}" 
                                    ng-model="precio.precio" ng-required="true">
                                    <span class="help-inline" 
                                    ng-show="frmPrecios.txtPrecio.$invalid && frmPrecios.txtPrecio.$touched">Debe ingresar el precio del producto</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="lblFecha" class="col-sm-3 control-label">Fecha de vigencia del precio</label>
                                <div class="col-sm-9" ng-controller="preciosController">
                                    <input type="text" class="form-control" id="txtFecha" placeholder="Fecha de vigencia del precio" value="{{fecha}}" ng-model="precio.fecha" ng-required="true" />
                                    <span class="help-inline" 
                                    ng-show="frmPrecios.txtFecha.$invalid && frmPrecios.txtFecha.$touched">Debe ingresar la fecha de vigencia del precio </span>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmPrecios.$invalid">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load Javascript Libraries (AngularJS, JQuery, Bootstrap) -->
        <script src="<?= asset('app/lib/angular/angular.min.js') ?>"></script>
        <script src="<?= asset('js/jquery.min.js') ?>"></script>
        <script src="<?= asset('js/bootstrap.min.js') ?>"></script>
        
        <!-- AngularJS Application Scripts -->
        <script src="<?= asset('app/app.js') ?>"></script>
        <script src="<?= asset('app/controllers/precios.js') ?>"></script>
        <script src="<?= asset('app/controllers/productos.js') ?>"></script>
        <script src="<?= asset('app/controllers/ubicaciones.js') ?>"></script>
        <script src="<?= asset('app/controllers/unidadesVenta.js') ?>"></script>
        <script src="<?= asset('app/controllers/datepicker.js') ?>"></script>
    </body>
</html>
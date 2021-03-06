
<!-- Estilo css para el botón de cargar archivos y el datepicker -->
<style>

    <!-- datepicker -->
    .full button span {
        background-color: limegreen;
        border-radius: 32px;
        color: black;
    }
    .partially button span {
        background-color: orange;
        border-radius: 32px;
        color: black;
    }
</style>



<h2>Precios de productos agropecuarios</h2>


<!-- Inicia: Contenido de manejo de datos -->
<div ng-controller="preciosController">

    
<button id="btnAgregar" class="btn btn-success" ng-click="toggle('add', -1)">Agregar Precio</button>
    

<!-- Inicia: Tabla con la información de consulta de datos -->
<table class="table table-hover" >
    <thead>
        <tr>
            <th>Tipo de producto</th>
            <th>Producto</th>
            <th>Provincia</th>
            <th>Cantón</th>
            <th>Distrito</th>
            <th>Ubicación exacta</th>
            <th>Procedencia</th>
            <th>Unidades de venta</th>
            <th>Precio</th>
            <th>Fecha</th>
            <th>
            </th>
        </tr>
    </thead>
     <tbody>
        <tr ng-repeat="precio in precios">
            <td>{{ precio.tipo_producto }}</td>
            <td>{{ precio.producto }}</td>
            <td>{{ precio.provincia }}</td>
            <td>{{ precio.canton }}</td>
            <td>{{ precio.distrito }}</td>
            <td>{{ precio.ubicacion_exacta }}</td>
            <td>{{ precio.procedencia }}</td>
            <td>{{ precio.valor_unidad_venta }} {{ precio.unidad_venta.unidad }}</td>
            <td>{{ precio.precio | currency}}</td>
            <td>{{ precio.fecha | date}}</td>

            <td>
                <button class="btn btn-primary btn-sm" ng-click="toggle('edit', precio.id_precio)">
                    <span class="glyphicon glyphicon-edit"></span>
                </button>
                <button class="btn btn-danger btn-sm btn-delete" ng-click="eliminar(precio.id_precio)">
                    <span class="glyphicon glyphicon-trash"></span>
                </button>
            </td>
        </tr>
    </tbody> 
</table>
<!-- Termina: Tabla con la información de consulta de datos -->

<!-- Inicia: Modal con los controles para agregar un nuevo registro o modificar uno existente -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">{{form.title}}</h4>
            </div>

            <div class="modal-body">
                <form name="frmPrecios" class="form-horizontal" novalidate="">

                    <div class="form-group error">
                        <label for="lblTipoProducto" class="col-sm-3 control-label">Tipo de producto</label>
                        <div class="col-sm-9">
                            <select class="form-control has-error" id="slTipoProducto" ng-model="precio.id_tipo_producto" ng-required="true" ng-change="obtenerProductosYUnidadesVenta(precio.id_tipo_producto)">
                              <option value="">---Seleccione un Tipo de Producto---</option>
                               <option ng-repeat="tipoProducto in tiposProducto" value="{{ tipoProducto.id }}">{{ tipoProducto.nombre }}</option>
                            </select>
                            <span class="help-inline" 
                            ng-show="frmPrecios.slTipoProducto.$invalid && frmPrecios.slTipoProducto.$touched">Debe seleccionar un tipo de producto</span>
                        </div>
                    </div>

                    <div class="form-group error">
                        <label for="lblProducto" class="col-sm-3 control-label">Producto</label>
                        <div class="col-sm-9">
                            <select class="form-control has-error" id="slProducto" ng-model="precio.id_producto" ng-required="true">
                              <option value="">---Seleccione un Producto---</option>
                              <option ng-repeat="producto in productos" value="{{ producto.id }}">{{ producto.nombre }}</option>
                            </select>
                            <span class="help-inline" 
                            ng-show="frmPrecios.slProducto.$invalid && frmPrecios.slProducto.$touched">Debe seleccionar un producto</span>
                        </div>
                    </div>

                    <div class="form-group error">

                        <label for="lblProvincia" class="col-sm-3 control-label">Provincia</label>
                        <div class="col-sm-9">
                            <select class="form-control has-error" id="slProvincia" ng-model="precio.id_provincia" ng-required="true" ng-change="obtenerCantones(precio.id_provincia)" >
                              <option value="">---Seleccione una Provincia---</option>
                              <option ng-repeat="provincia in provincias" value="{{ provincia.id }}">{{ provincia.nombre }}</option>
                            </select>
                            <span class="help-inline" 
                            ng-show="frmPrecios.slProvincia.$invalid && frmPrecios.slProvincia.$touched">Debe seleccionar una provincia</span>
                        </div>
                    </div>

                    <div class="form-group error">

                        <label for="lblCanton" class="col-sm-3 control-label">Cantón</label>
                        <div class="col-sm-9">
                            <select class="form-control has-error" id="slCanton" ng-model="precio.id_canton" ng-required="true" ng-change="obtenerDistritos(precio.id_canton)" >
                              <option value="">---Seleccione un Cantón---</option>
                              <option ng-repeat="canton in cantones" value="{{ canton.id }}">{{ canton.nombre }}</option>
                            </select>
                            <span class="help-inline" 
                            ng-show="frmPrecios.slCanton.$invalid && frmPrecios.slCanton.$touched">Debe seleccionar un cantón</span>
                        </div>
                    </div>

                    <div class="form-group error">
                        <label for="lblDistrito" class="col-sm-3 control-label">Distrito</label>
                        <div class="col-sm-9">
                            <select class="form-control has-error" id="slDistrito" ng-model="precio.id_distrito" ng-required="true">
                              <option value="">---Seleccione un Distrito---</option>
                              <option ng-repeat="distrito in distritos" value="{{ distrito.id }}">{{ distrito.nombre }}</option>
                            </select>
                            <span class="help-inline" 
                            ng-show="frmPrecios.slDistrito.$invalid && frmPrecios.slDistrito.$touched">Debe seleccionar un distrito</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lblUbicacionExacta" class="col-sm-3 control-label">Ubicación exacta</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txtUbicacionExacta" placeholder="Ubicación donde se encuentra el producto" value="{{ubicacionExacta}}" 
                            ng-model="precio.ubicacion_exacta" ng-required="false">
                        </div>
                    </div>

                    <div class="form-group error">
                        <label for="lblProcedencia" class="col-sm-3 control-label">Procedencia</label>
                        <div class="col-sm-9">
                            <select class="form-control has-error" id="slProcedencia" ng-model="precio.id_procedencia" ng-required="true">
                              <option value="">---Seleccione una Procedencia---</option>
                               <option ng-repeat="procedencia in procedencias" value="{{ procedencia.id }}">{{ procedencia.nombre }}</option>
                            </select>
                            <span class="help-inline" 
                            ng-show="frmPrecios.slProcedencia.$invalid && frmPrecios.slProcedencia.$touched">Debe seleccionar una procedencia/span>
                        </div>
                    </div>

                    <div class="form-group error">
                        <label for="lblUnidadVenta" class="col-sm-3 control-label">Unidad de venta</label>
                        <div class="col-sm-9">
                            <select class="form-control has-error" id="slUnidadVenta" ng-model="precio.id_unidad_venta" ng-required="true">
                              <option value="">---Seleccione una Unidad de Venta---</option>
                              <option ng-repeat="unidadVenta in unidadesVenta" value="{{ unidadVenta.id }}">{{ unidadVenta.unidad }}</option>
                            </select>
                            <span class="help-inline" 
                            ng-show="frmPrecios.slUnidadVenta.$invalid && frmPrecios.slUnidadVenta.$touched">Debe seleccionar una unidad de venta</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lblValor" class="col-sm-3 control-label">Cantidad</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="txtUnidadVenta" placeholder="Cantidad de unidades de venta" 
                            ng-model="precio.valor_unidad_venta" ng-required="true" min="1">
                            <span class="help-inline" 
                            ng-show="frmPrecios.txtUnidadVenta.$invalid && frmPrecios.txtUnidadVenta.$touched">Debe ingresar la cantidad en unidades de venta del producto</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lblPrecio" class="col-sm-3 control-label" ng-style="{'margin-right':'15px'}">Precio</label>
                        <div class="col-sm-8 input-group" >
                            <spam class="input-group-addon">₡</spam>
                            <input type="number" class="form-control" id="txtPrecio" placeholder="Precio del producto: 1.000,00" ng-model="precio.precio" ng-required="true" ng-style="{'width':'106%'}" min="0">
                                
                            <span class="help-inline" ng-show="frmPrecios.txtPrecio.$invalid && frmPrecios.txtPrecio.$touched">Debe ingresar el precio del producto</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="lblFecha" class="col-sm-3 control-label">Fecha</label>
                        <div class="col-sm-9">
                            
                            <p class="input-group" ng-controller="miDatepickerController">
                                        <input type="text" class="form-control" id="txtFecha" placeholder="Fecha de vigencia del precio" ng-model="precio.fecha" ng-required="true" uib-datepicker-popup  is-open="popup.opened" datepicker-options="dateOptions"  close-text="Cerrar" />
                                      <span class="input-group-btn">
                                        <button type="button" class="btn btn-default" ng-click="open()">
                                          <i class="glyphicon glyphicon-calendar"></i></button>
                                      </span>
                                    </p>

                            <span class="help-inline" 
                            ng-show="frmPrecios.txtFecha.$invalid && frmPrecios.txtFecha.$touched">Debe ingresar la fecha de vigencia del precio </span>
                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save" ng-click="guardar(modalstate, id)" ng-disabled="frmPrecios.$invalid">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- Termina: Modal con los controles para agregar un nuevo registro o modificar uno existente -->

</div>
<!-- Termina: Contenido de manejo de datos -->

<script src="<?= asset('app/controllers/mi-datepicker.js') ?>"></script>

        <script type="text/javascript">

            $(document).on('change', '.btn-file :file', function() {
                alert("hola 0");
            });

            $(document).ready( function() {
                $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
                    alert("hola 1");
                });
            });
</script>


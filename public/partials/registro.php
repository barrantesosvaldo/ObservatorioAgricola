<h2>Registro de Usuarios</h2>

<div ng-controller="registroController">

	<form name="frmRegistro" class="form-horizontal" novalidate="">

		<div class="form-group">
            <label for="lblNombre" class="col-sm-3 control-label">Nombre de usuario:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="txtNombre" placeholder="Nombre de usuario" value="{{nombre}}" 
                ng-model="usuario.nombre" ng-required="true">
                <span class="help-inline" 
                            ng-show="frmRegistro.txtNombre.$invalid && frmRegistro.txtNombre.$touched">Debe ingresar el nombre de usuario</span>
            </div>
        </div>

        <div class="form-group">
            <label for="lblCorreo" class="col-sm-3 control-label">Correo electrónico:</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" id="txtCorreo" placeholder="Correo electrónico" value="{{correo}}" 
                ng-model="usuario.correo" ng-required="true">
                <span class="help-inline" 
                            ng-show="frmRegistro.txtCorreo.$invalid && frmRegistro.txtCorreo.$touched">Debe ingresar el correo electrónico</span>
            </div>
        </div>

        <div class="form-group">
            <label for="lblContrasenna" class="col-sm-3 control-label">Contraseña:</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="txtContrasenna" placeholder="Contraseña" value="{{contrasenna}}" 
                ng-model="usuario.contrasenna" ng-required="true">
                <span class="help-inline" 
                            ng-show="frmRegistro.txtContrasenna.$invalid && frmRegistro.txtContrasenna.$touched">Debe ingresar la contraseña</span>
            </div>
        </div>

        <div class="form-group">
            <label for="lblConfirmarContrasenna" class="col-sm-3 control-label">Confirmar contraseña:</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="txtConfirmarContrasenna" placeholder="Confirmar contraseña" value="{{confirmarContrasenna}}" 
                ng-model="usuario.confirmarContrasenna" ng-required="true">
                <span class="help-inline" 
                            ng-show="frmRegistro.txtConfirmarContrasenna.$invalid && frmRegistro.txtConfirmarContrasenna.$touched">Debe confirmar la contraseña</span>
            </div>
        </div>
	</form>

    <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btn-save" ng-click="guardar()" ng-disabled="frmRegistro.$invalid">Guardar</button>
    </div>

</div>
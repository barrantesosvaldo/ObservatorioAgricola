<div class="container" ng-controller="ingresarController">
	<div class="jumbotron" style="margin-top: 5%; margin-left: 20%; width: 60%;">
	    <h2>Autenticación de usuarios</h2>

	    <form name="frmIngresar" class="form-horizontal" novalidate="">

		    <div class="form-group">
                <div>
                    <input type="email" class="form-control" id="txtNombreUsuario" placeholder="Nombre de usuario" 
                    ng-model="correo" ng-required="true">
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
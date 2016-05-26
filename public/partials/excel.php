<!-- Estilo css para el botón de cargar archivos y el datepicker -->
<style>

    .btn-file {
        position: relative;
        overflow: hidden;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
</style>

<h2>Precios de productos agropecuarios</h2>


<!-- Inicia: Contenido de manejo de datos -->
<div ng-controller="excelController">

    <span class="btn btn-primary btn-file btn-sm">
        Cargar archivo <input type="file" accept=".xlsx" >
    </span> 

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
            </tr>
        </tbody> 
    </table>
    <!-- Termina: Tabla con la información de consulta de datos -->

</div>
<!-- Termina: Contenido de manejo de datos -->

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
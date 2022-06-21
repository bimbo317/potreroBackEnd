<?php
require_once '../headertareas.php';
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script language="javascript">
    //Ocultamos alertas
    function hideAlerts() {
        document.getElementById("successAdd").style.display = "none";
        document.getElementById("errorAdd").style.display = "none";
        document.getElementById("successDelete").style.display = "none";
        document.getElementById("errorDelete").style.display = "none";
    }
    //Script para agregar prenda
    $(document).ready(function() {
        //detecta que boton fue presionado
        $('.add_btn').click(function(e) {
            e.preventDefault();
            hideAlerts();
            //muestra el modal
            $('#modalAdd').modal('show');
        });
    });

    //Script para modificar prenda
    $(document).ready(function() {
        //detecta que boton fue presionado
        $('.update_btn').click(function(e) {
            e.preventDefault();
            //obtiene id de prenda seleccionada
            var prenda_id = $(this).closest('tr').find('.prenda_id').text();
            var tipo_prenda = $(this).closest('tr').find('.tipo_de_prenda').text();
            var marca = $(this).closest('tr').find('.marca').text();
            var precio = $(this).closest('tr').find('.precio').text();
            var talle = $(this).closest('tr').find('.talle').text();
            //var imagen1 = $(this).closest('tr').find('.imagen1').text();
            //var imagen1=document.getElementById("imagen_re1").src;
            //asigna el valor del id obtenido al input del form que se enviara para borrar la prenda
            $('#update_id').val(prenda_id);
            document.getElementById("upd_typeClothes").value = tipo_prenda;
            document.getElementById("upd_brandClothes").value = marca;
            document.getElementById("upd_sizeClothes").value = talle;
            document.getElementById("upd_priceClothes").value = precio;
            //document.getElementById("upd_photo1").value = imagen1;
            document.getElementById("img1").src = "vista.php?id1=" + prenda_id;
            document.getElementById("img2").src = "vista.php?id2=" + prenda_id;
            //obtiene id de prenda seleccionada
            var prenda_id = $(this).closest('tr').find('.prenda_id').text();
            //asigna el valor del id obtenido al input del form que se enviara para borrar la prenda
            $('#update_id').val(prenda_id);
            //muestra el modal
            hideAlerts();
            $('#modalUpdate').modal('show');
        });
    });

    //Script para eliminar prenda
    $(document).ready(function() {
        //detecta que boton fue presionado
        $('.delete_btn').click(function(e) {
            e.preventDefault();
            //obtiene id de prenda seleccionada
            var prenda_id = $(this).closest('tr').find('.prenda_id').text();
            //asigna el valor del id obtenido al input del form que se enviara para borrar la prenda
            $('#delete_id').val(prenda_id);
            //muestra el modal
            hideAlerts();
            $('#modalDelete').modal('show');
        });
    });
</script>
<span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-left theme--light" style="font-size: 40px;"></i></span>
Clase 11
</div>
</div>
<div class="d-flex justify-content-end col-md-6 col-12">
    Fecha de entrega 8-jun
    <span class="ml-2 v-chip v-chip--label theme--dark v-size--small tecnica"><span class="v-chip__content">
            Back End
        </span></span>
</div>
</div>
</div>
</div>
<hr role="separator" aria-orientation="horizontal" class="w-2 mt-1 v-divider theme--light" />
<div class="headline px-3">ABM PARTE 2 (INSERT INTO - UPDATE)</div>
<div class="mt-2 subtitle-1 px-3">Crear una página que liste todos los registros de la tabla con la que veníamos trabajando y agregar la opción de EDITAR que se linkée con el archivo modificar.php que actualice el registro seleccionado según su id, el cual es enviado a través del método GET y recupere los datos del registro dentro de los imput del formulario... Crear un botón que linkée con el archivo insertar.php que contenga el formulario de carga de registros.... que ejecute el archivo insertar.php con la correspondine consulta.</div>
<section class="px-4">
    <div class="container">
        <div class="row">
            <h1>Tienda de ropa</h1><br>
            <div class="Alertas">
                <!--Alerta Agregar prenda nueva -->
                <div class="alert alert-success" role="alert" id="successAdd" style="display: none;">
                    La prenda ha sido guardada correctamente.
                </div>
                <div class="alert alert-danger" role="alert" id="errorAdd" style="display: none;">
                    Error al guardar la nueva prenda!!!
                </div>
                <!--Alerta Agregar prenda nueva -->
                <div class="alert alert-success" role="alert" id="successUpdate" style="display: none;">
                    La prenda ha sido modificada correctamente.
                </div>
                <div class="alert alert-danger" role="alert" id="errorUpdate" style="display: none;">
                    Error al guardar la nueva prenda!!!
                </div>
                <!--Alerta Eliminar prenda -->
                <div class="alert alert-success" role="alert" id="successDelete" style="display: none;">
                    La prenda ha sido eliminada correctamente.
                </div>
                <div class="alert alert-danger" role="alert" id="errorDelete" style="display: none;">
                    Error al eliminar la prenda!!!
                </div>
            </div>
            <div class="centrado">
                <a href="#" class="add_btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd">Nueva Prenda</a>
            </div>
            <table class="table align-middle">
                <tr class="text-center">
                    <!-- <th>ID</th> -->
                    <th>TIPO DE PRENDA</th>
                    <th>MARCA</th>
                    <th>TALLE</th>
                    <th>PRECIO</th>
                    <th>IMAGEN 1</th>
                    <th>IMAGEN 2</th>
                    <!-- <th>EDITAR</th> -->
                    <th>BORRAR</th>
                    <th>MODIFICAR</th>
                </tr>
                <!-- requiero conexion -->
                <?php
                require_once '../conexion.php';
                $consulta = 'SELECT * FROM ropa';

                // 3) Ejecutar la orden y obtenemos los registros
                $datos = $mysqli->query($consulta);
                // 4) Mostrar los datos del registro
                while ($reg = mysqli_fetch_array($datos)) { ?>
                    <tr class="text-center">
                        <td class="prenda_id" style="display: none;"><?php echo $reg['id']; ?></td>
                        <td class="tipo_de_prenda"><?php echo ucwords($reg['tipo_de_prenda']); ?></td>
                        <td class="marca"><?php echo ucwords($reg['marca']); ?></td>
                        <td class="talle"><?php echo strtoupper($reg['talle']); ?></td>
                        <td class="precio"><?php echo $reg['precio']; ?></td>
                        <td class="imagen1"><img id="imagen_re1" src="data:image/png;base64, <?php echo base64_encode($reg['imagen1']) ?>" alt="" width="85px" height="85px"></td>
                        <td class="imagen2"><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen2']) ?>" alt="" width="85px" height="85px"></td>
                        <td><a href="#" class="btn delete_btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalDelete">Borrar</a></td>
                        <td><a href="#" class="btn update_btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#modalUpdate">Modificar</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</section>
<?php
require_once './modal_add.php';
require_once './modal_update.php';
require_once './modal_delete.php';
require_once '../footertareas.php';
?>
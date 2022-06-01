<?php
require_once '../headertareas.php';
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script language="javascript">
    //Script 2do intento, esta funcion esperara que alguno de los botones Borrar sean presionados
    $(document).ready(function() {
        //detecta que boton fue presionado
        $('.delete_btn').click(function(e) {
            e.preventDefault();
            //obtiene id de prenda seleccionada
            var prenda_id = $(this).closest('tr').find('.prenda_id').text();
            //asigna el valor del id obtenido al input del form que se enviara para borrar la prenda
            $('#delete_id').val(prenda_id);
            //muestra el modal
            $('#modalConfirm').modal('show');
        });
    });
</script>
<span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-left theme--light" style="font-size: 40px;"></i></span>
Clase 10
</div>
</div>
<div class="d-flex justify-end col-md-6 col-12" style="align-items: center;">
    Fecha de entrega 1-jun
    <span class="ml-2 v-chip v-chip--label theme--dark v-size--small tecnica"><span class="v-chip__content">
            Back End
        </span></span>
</div>
</div>
</div>
</div>
<hr role="separator" aria-orientation="horizontal" class="w-2 mt-1 v-divider theme--light" />
<div class="headline">ABM PARTE 1 (DELETE)</div>
<div class="mt-2 subtitle-1">Crear una página que liste todos los registros de la tabla con la que veníamos trabajando y agregar la opción de borrar que se linkée con el archivo borrar.php que elimina el registro seleccionado según su id, el cual es enviado a través del método GET</div>
<section>
    <div class="container">
        <div class="row">
            <h1>Tienda de ropa</h1><br>
            <div class="alert alert-success" role="alert" id="success" style="display: none;">
                La prenda ha sido eliminada correctamente.
            </div>
            <div class="alert alert-danger" role="alert" id="error" style="display: none;">
                Error al eliminar la prenda!!!
            </div>
            <table class="table align-middle">
                <tr class="text-center">
                    <!-- <th>ID</th> -->
                    <th>TIPO DE PRENDA</th>
                    <th>MARCA</th>
                    <th>TALLE</th>
                    <th>PRECIO</th>
                    <th>IMAGEN</th>
                    <!-- <th>EDITAR</th> -->
                    <th>BORRAR</th>
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
                        <td><?php echo ucwords($reg['tipo_de_prenda']); ?></td>
                        <td><?php echo ucwords($reg['marca']); ?></td>
                        <td><?php echo strtoupper($reg['talle']); ?></td>
                        <td><?php echo $reg['precio']; ?></td>
                        <td><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen1']) ?>" alt="" width="100px" height="100px"></td>
                        <!-- <td><a href="modificar.php?id=<?php echo $reg['id']; ?>">Editar</a></td> -->
                        <!-- <td><a class="delete btn btn-danger" href="./borrar.php?id=<?php echo $reg['id']; ?>">Borrar</a></td> -->
                        <!-- <td><a class="delete btn btn-danger" href="#" onclick=" ConfirmChoice(<?php echo $reg['id']; ?>); return false;">Borrar</a></td> -->
                        <td><a href="#" class="delete_btn btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalConfirm">Borrar</a></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</section>
<!-- Modal Delete -->
<div class="modal fade" id="modalConfirm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="borrar.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="clothes_id" id="delete_id">
                    <h4>Seguro que desea eliminar este articulo?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" name="delete_clothes" class="btn btn-danger">Si</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require_once '../footertareas.php';
?>
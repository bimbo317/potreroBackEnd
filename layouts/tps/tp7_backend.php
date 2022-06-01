<?php
require_once '../headertareas.php';
?>

<span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-left theme--light" style="font-size: 40px;"></i></span>
Clase 9
</div>
</div>
<div class="d-flex justify-end col-md-6 col-12" style="align-items: center;">
    Fecha de entrega 18-may
    <span class="ml-2 v-chip v-chip--label theme--dark v-size--small tecnica"><span class="v-chip__content">
            Back End
        </span></span>
</div>
</div>
</div>
</div>
<hr role="separator" aria-orientation="horizontal" class="w-2 mt-1 v-divider theme--light" />
<div class="headline">Practico 9</div>
<div class="mt-2 subtitle-1">Agregar un campo a la tabla del practico anterior, que contenga la imagen del producto. Insertar en la pagina listar.php links o botones que me filtren los productos por marca y uno que me filtre los productos con un valor menor a 5000</div>
<section>
    <div class="container">
        <div class="row">
            <h1>Tienda de ropa</h1><br>
            <ul class="row1">
                <a href="?p=menor" type="submit" class="btn btn-outline-secondary m-1" name="menor">Menor a 500</a>
                <a href="./tp8_backend.php" type="submit" class="btn btn-outline-secondary m-1">Listar</a>
                <?php
                // 1) Buscamos archivo de conexion
                require('../conexion.php');
                // 2) Preparar la orden SQL
                $consulta0 = 'SELECT DISTINCT marca FROM ropa';
                //$datos0 = mysqli_query($conexion, $consulta0);
                $datos0 = $mysqli->query($consulta0);
                echo '<div class="dropdown btn selectoption">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Filtrar Marca
                </button>
                <ul class="dropdown-menu m-1" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="?p=todos">Todos</a></li>';
                while ($fila = mysqli_fetch_array($datos0)) {
                    echo '<li><a class="dropdown-item" href="?p=' . strtolower(ucwords($fila[0])) . '">' . ucwords($fila[0]) . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div> <!-- fin row1 -->
    <?php
    $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'todos';
    ?>
    </div>
    <h2>Lista de ropa</h2>
    <p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
    <?php
    //cargamos el php con los filtros
    require_once '../filtrar.php';
    ?>
    </div>
    </div>
    </div>
</section>
<?php
require_once '../footertareas.php';
?>
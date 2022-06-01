<?php
require_once '../headertareas.php';
?>
<span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-left theme--light" style="font-size: 40px;"></i></span>
Clase 8
</div>
</div>
<div class="d-flex justify-end col-md-6 col-12" style="align-items: center;">
    Fecha de entrega 11-may
    <span class="ml-2 v-chip v-chip--label theme--dark v-size--small tecnica"><span class="v-chip__content">
            Back End
        </span></span>
</div>
</div>
</div>
</div>
<hr role="separator" aria-orientation="horizontal" class="w-2 mt-1 v-divider theme--light" />
<?php
echo '<div class="headline">Consultas DB</div>';
echo '<div class="mt-2 subtitle-1">Entregar solo captura de pantalla</div>';
?>
<section>
    <div class="container">
        <div class="row">
            <?php
            echo '<div class="mt-2 subtitle-1">1. Ingresar los siguientes datos utilizando la interfaz gráfica de phpMyAdmin y almacenarlo en la 
                                                base de datos anteriormente creada en la Tarea N°</div>';
            echo '<div class="mt-2 subtitle-1"><div class="mt-2 ml-2 subtitle-1">
                                                a. buzo, nike, xxl, 600</div>
                                                </div>';
            echo '<div class="mt-2 subtitle-1 pb-2"><div class="mt-2 ml-2 subtitle-1">
                                                b. buzo, addidas, l, 400</div>
                                                </div>';
            echo '<img src="../../img/tp06.jpg">';
            // 1) Conexion y selección de base de datos
            $conexion = mysqli_connect("127.0.0.1", "root", "", null, "3366");
            mysqli_select_db($conexion, "tienda"); // esto lo podemos poner acá o mas abajo, no hay problema

            // 2) Preparar la orden SQL

            $consulta = 'SELECT * FROM ropa';

            // 3) Ejecutar la orden y obtenemos los registros
            $datos1 = mysqli_query($conexion, $consulta);

            //  recorro todos los registros y genero una CARD PARA CADA UNA
            // Ejercicio 2 parte a
            echo '<div class="mt-2 subtitle-1">2. Mediante código PHP, consultar a la base de datos lo siguiente:
                                                <div class="mt-2 ml-2 subtitle-1">
                                                a. Listar todos los registros </div>
                                                </div>';
            echo '<div class="row ml-1">';
            while ($reg1 = mysqli_fetch_array($datos1)) {
                echo '<div class="card col-sm-12 col-md-6 col-lg-3 m-1">';
                echo '<h3 class="card-title" style="width: 100%; font-size:25px;">' . ucwords($reg1['marca']) . '</h3>';
                //echo '<h3 class="card-title" style="width: 100%; font-size:25px;">'.ucwords($reg['marca']).'</h3>';
                echo '<span>$ ' . $reg1['precio'] . '</span>';
                echo '</div>';
            }
            echo '</div>';
            // Ejercicio 2 parte b
            echo '<div class="mt-2 subtitle-1">
                                                <div class="mt-2 ml-2 subtitle-1">b. Listar todos los registros cuyo tipo de prenda sea ‘buzo’</div>
                                                </div>';
            $datos2 = mysqli_query($conexion, $consulta);
            while ($reg2 = mysqli_fetch_array($datos2)) {
                if ($reg2['tipo_de_prenda'] == 'buzo') {
                    echo '<div class="card col-sm-12 col-md-6 col-lg-3 m-1">';
                    echo '<h3 class="card-title" style="width: 100%; font-size:25px;">' . ucwords($reg2['marca']) . '</h3>';
                    echo '<span>$ ' . $reg2['precio'] . '</span>';
                    echo '</div>';
                }
            }
            // Ejercicio 2 parte c
            echo '<div class="mt-2 subtitle-1">
                                                <div class="mt-2 ml-2 subtitle-1">c. Listar todos los registros cuya marca sea ‘nike’</div>
                                                </div>';
            $datos3 = mysqli_query($conexion, $consulta);
            while ($reg3 = mysqli_fetch_array($datos3)) {
                if ($reg3['marca'] == 'nike') {
                    echo '<div class="card col-sm-12 col-md-6 col-lg-3 m-1">';
                    echo '<h3 class="card-title" style="width: 100%; font-size:25px;">' . ucwords($reg3['marca']) . '</h3>';
                    echo '<span>$ ' . $reg3['precio'] . '</span>';
                    echo '</div>';
                }
            }
            // Ejercicio 2 parte d
            echo '<div class="mt-2 subtitle-1">
                                                <div class="mt-2 ml-2 subtitle-1">d. Listar todos los registros cuyo precio sea mayor a ‘500’</div>
                                                </div>';
            $datos4 = mysqli_query($conexion, $consulta);
            while ($reg4 = mysqli_fetch_array($datos4)) {
                if ($reg4['precio'] > 500) {
                    echo '<div class="card col-sm-12 col-md-6 col-lg-3 m-1">';
                    echo '<h3 class="card-title" style="width: 100%; font-size:25px;">' . ucwords($reg4['marca']) . '</h3>';
                    echo '<span>$ ' . $reg4['precio'] . '</span>';
                    echo '</div>';
                }
            }
            echo '</div>';
            ?>
        </div>
    </div>
</section>
<?php
require_once '../footertareas.php';
?>
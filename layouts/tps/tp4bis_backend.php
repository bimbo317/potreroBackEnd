<?php
require_once '../headertareas.php';
?>

<span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-left theme--light" style="font-size: 40px;"></i></span>
Clase 6
</div>
</div>
<div class="d-flex justify-content-end col-md-6 col-12">
    Fecha de entrega 27-abr
    <span class="ml-2 v-chip v-chip--label theme--dark v-size--small tecnica"><span class="v-chip__content">
            Back End
        </span></span>
</div>
</div>
</div>
</div>
<hr role="separator" aria-orientation="horizontal" class="w-2 mt-1 v-divider theme--light" />
<div class="headline px-3">Practico Nº4 Bis</div>
<div class="mt-2 subtitle-1 px-3">Crear un archivo “tp4bis_backend.php” y realizar los siguientes ejercicios:
</div>
<section class="px-4">
    <?php
    /*
    numero 1
    */
    echo '<div class="mt-4 subtitle-1"><br>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</div><br>';
    $contador = 1;
    $array1 = [];
    while ($contador <= 20) {
        if (($contador % 2) == 0) {
            echo 'Se guarda el valor ' . $contador . ' en el vector<br>';
            $array1[] = $contador;
        }
        $contador++;
    }
    echo '<br>';
    print_r($array1);
    /*
    numero 2
    */
    echo '<div class="mt-4 subtitle-1"><br>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la 
                                    matriz. Mostrar el esquema del array con print_r().
                                    </div><br>';
    $array2 = ['Pedro', 'Ana', 34, 1];
    print_r($array2);
    /*
    numero 3
    */
    echo '<div class="mt-4 subtitle-1"><br>3. Crear un array asociativo e introducir los siguientes valores:<br>
                                    Nombre: Pedro <br>
                                    Apellido: Torres<br>
                                    Dirección: Av. Mayor 3703<br>
                                    Teléfono: 1122334455<br>
                                    </div><br>';
    $array3 = ['Nombre' => 'Pedro', 'Apellido' => 'Torres', 'Direccion' => 'Av. Mayor 3703', 'Teléfono' => '1122334455'];
    print_r($array3);
    /*
    numero 4
    */
    echo '<div class="mt-4 subtitle-1"><br>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y 
                                    Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
                                    Ejemplo: <i>La ciudad con el índice 0 tiene el nombre Madrid.</i></div><br>';
    $ciudades = ['Madrid', 'Barcelona', 'Londres', 'New York', 'Los Ángeles', 'Chicago'];
    foreach ($ciudades as $numero => $ciudad) {
        echo 'La ciudad con el índice ' . $numero . ' tiene el nombre ' . $ciudad . '<br>';
    }
    /*
    numero 5
    */
    echo '<div class="mt-4 subtitle-1"><br>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, 
                                    LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
                                    Ejemplo: <i>El índice de Madrid es MD</i></div><br>';
    $ciudades2 = ['MD' => 'Madrid', 'BCL' => 'Barcelona', 'LD' => 'Londres', 'NY' => 'New York', 'LA' => 'Los Ángeles', 'CCG' => 'Chicago'];
    foreach ($ciudades2 as $codigo => $ciudad) {
        echo 'El índice de ' . $ciudad . ' es ' . $codigo . '<br>';
    }
    ?>
</section>
<?php
require_once '../footertareas.php';
?>
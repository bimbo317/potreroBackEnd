<?php
require_once '../headertareas.php';
?>
<span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-left theme--light" style="font-size: 40px;"></i></span>
Clase 4
</div>
</div>
<div class="d-flex justify-end col-md-6 col-12" style="align-items: center;">
    Fecha de entrega 13-abr
    <span class="ml-2 v-chip v-chip--label theme--dark v-size--small tecnica"><span class="v-chip__content">
            Back End
        </span></span>
</div>
</div>
</div>
</div>
<hr role="separator" aria-orientation="horizontal" class="w-2 mt-1 v-divider theme--light" />
<div class="headline">Practico Nº3</div>
<div class="mt-2 subtitle-1">Crear un archivo “tp3_backend.php” y realizar los siguientes ejercicios:</div>
<section>
    <?php
    /*
    numero 1
    */
    echo '<div class="mt-4 subtitle-1"><br>1. Mostrar los números del 1 al 100.</div><br>';
    $a = 1;
    while ($a <= 100) {
        if ($a != 1) {
            echo ", ";
        }
        echo $a;
        $a++;
    }
    /*
    numero 2
    */
    echo '<div class="mt-4 subtitle-1"><br>2. Mostrar los números del 100 al 1.</div><br>';
    $b = 100;
    do {
        if ($b != 100) {
            echo ", ";
        }
        echo $b;
        $b--;
    } while ($b >= 1);
    /*
    numero 3
    */
    echo '<div class="mt-4 subtitle-1"><br>3. Mostrar los números pares del 1 al 100.</div><br>';
    $c = 1;
    while ($c <= 100) {
        if ($c % 2 == 0) {
            if ($c != 2) {
                echo ", ";
            }
            echo $c;
        }
        $c++;
    }
    /*
    numero 4
    */
    echo '<div class="mt-4 subtitle-1"><br>4. Mostrar los números impares del 1 al 100.</div><br>';
    $d = 1;
    do {
        if ($d % 2 == 1) {
            if ($d != 1) {
                echo ", ";
            }
            echo $d;
        }
        $d++;
    } while ($d <= 100);
    /*
    numero 5
    */
    echo '<div class="mt-4 subtitle-1"><br>5. Mostrar la suma de los números de 1 a 20.</div><br>';
    $suma = 0;
    for ($e = 0; $e <= 20; $e++) {
        $suma = $suma + $e;
    }
    echo "La suma de los nros del 1 al 20 es igual a " . $suma;
    /*
    numero 6
    */
    echo '<div class="mt-4 subtitle-1"><br>6. Mostrar la suma de números pares de 1 a 20.</div><br>';
    $sumaImpares = 0;
    for ($f = 0; $f <= 20; $f++) {
        if ($f % 2 == 0) {
            $sumaImpares = $sumaImpares + $f;
        }
    }
    echo "La suma de los nros Pares del 1 al 20 es igual a " . $sumaImpares;
    ?>
</section>
<?php
require_once '../footertareas.php';
?>
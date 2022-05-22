<?php
require_once 'paginas/headertareas.php';
?>
<span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-left theme--light" style="font-size: 40px;"></i></span>
Clase 3
</div>
</div>
<div class="d-flex justify-end col-md-6 col-12" style="align-items: center;">
    Fecha de entrega 06-abr
    <span class="ml-2 v-chip v-chip--label theme--dark v-size--small tecnica"><span class="v-chip__content">
            Back End
        </span></span>
</div>
</div>
</div>
</div>
<hr role="separator" aria-orientation="horizontal" class="w-2 mt-1 v-divider theme--light" />
<div class="headline">Practico Nº2</div>
<div class="mt-2 subtitle-1">Crear un archivo "tp2_backend.php" y realizar los siguientes ejercicios:</div>
<section>
    <?php
    /*
    numero 1
    */
    echo '<div class="mt-4 subtitle-1"><br>1. Crear una variable n y validar que sea un número positivo</div><br>';
    $n = 0;
    echo "Valor de variable: " . $n . "<br>";
    if ($n > 0) {
        echo "el número es positivo";
    } else {
        echo "el número NO es positivo";
    }
    /*
    numero 2
    */
    echo '<div class="mt-4 subtitle-1"><br>2. Crea una variable n y validar que sea un número mayor a 1 y menor a 10</div><br>';
    $variableN2 = 4;
    echo "Valor de variable: " . $variableN2 . "<br>";
    if ($variableN2 > 1 && $variableN2 < 10) {
        echo $variableN2 . " es mayor que 1 y menor que 10";
    } else {
        echo $variableN2 . " es menor que 1 o mayor que 10";
    }
    /*
    numero 3
    */
    echo '<div class="mt-4 subtitle-1"><br>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2</div><br>';
    $variableN3 = 4;
    echo "Valor de variable: " . $variableN3 . "<br>";
    if ($variableN3 > 10 || $variableN3 < 2) {
        echo $variableN3 . " es mayor que 10 o menor que 2";
    } else {
        echo $variableN3 . " es menor que 10 o mayor que 2";
    }
    /*
    numero 4
    */
    echo '<div class="mt-4 subtitle-1"><br>4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
    mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
    mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
    numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”</div><br>';
    $numero1 = 1;
    $numero2 = 6;
    echo "Valor de Número 1: " . $numero1 . "<br>";
    echo "Valor de Número 2: " . $numero2 . "<br>";
    if ($numero1 > $numero2) {
        echo "************ " . $numero1 . " es mayor que " . $numero2 . " ************<br>";
        echo "Suma = " . ($numero1 + $numero2) . "<br>";
        echo "Resta = " . ($numero1 - $numero2) . "<br>";
    } else if ($numero1 < $numero2) {
        echo "************ " . $numero2 . " es mayor que " . $numero1 . " ************<br>";
        echo "Multiplicación = " . ($numero1 * $numero2) . "<br>";
        $divi = $numero1 / $numero2;
        echo "Cociente división entera = " . floor($divi) . "<br>";
        echo "Módulo = " . ($numero1 % $numero2) . "<br>";
    } else {
        echo "************ Los números ingresados son iguales ************";
    }
    ?>
</section>
<?php
require_once 'paginas/footertareas.php';
?>
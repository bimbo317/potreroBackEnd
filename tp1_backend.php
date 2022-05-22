<?php
require_once 'paginas/headertareas.php';
?>
<span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-chevron-left theme--light" style="font-size: 40px;"></i></span>
Clase 2
</div>
</div>
<div class="d-flex justify-end col-md-6 col-12" style="align-items: center;">
    Fecha de entrega 30-mar
    <span class="ml-2 v-chip v-chip--label theme--dark v-size--small tecnica"><span class="v-chip__content">
            Back End
        </span></span>
</div>
</div>
</div>
</div>
<hr role="separator" aria-orientation="horizontal" class="w-2 mt-1 v-divider theme--light" />
<div class="headline">Practico Nº1</div>
<div class="mt-2 subtitle-1">Crear un archivo “tp1_backend.php” y realizar los siguientes ejercicios:</div>
<section>
    <div class="mt-4 subtitle-1"><br>1. Imprima por pantalla: “Hola mundo”</div><br>
    <?php
    echo "Hola mundo";
    ?>
    <div class="mt-4 subtitle-1"><br>2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</div><br>
    <?php
    $variable1 = "Hola mundo";
    echo $variable1;
    ?>
    <div class="mt-4 subtitle-1"><br>3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
        entera y el resto de la división entera</div><br>
    <?php
    $numero1 = 2;
    $numero2 = 3;
    echo "Variable 1 = " . $numero1 . "<br>";
    echo "Variable 2 = " . $numero2 . "<br>";
    echo "Suma = " . $numero1 + $numero2 . "<br>";
    echo "Resta = " . $numero1 - $numero2 . "<br>";
    echo "Multiplicacion = " . $numero1 * $numero2 . "<br>";
    echo "Division = " . $numero1 / $numero2 . "<br>";
    ?>
    <div class="mt-4 subtitle-1"><br>4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.</div><br>
    <?php
    echo "<p>Fórmula: ºF = (ºC · 1,8) + 32. Para calcular cuántos grados Fahrenheit son X grados Celsius, tenemos que multiplicar los X grados Celsius por 1,8 y sumarle 32.</p><br>";
    $gradosCelcius = 20;
    $gradosFarenheit = ($gradosCelcius * 1.8) + 32;
    echo "20º Celcius equivalen a " . $gradosFarenheit . "º Farenheit";
    ?>
    <div class="mt-4 subtitle-1"><br>5. Implementar algoritmos que permitan</div>
    <div class="mt-4 subtitle-1">a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.</div><br>
    <?php
    $base = 18;
    $altura = 12;
    echo "Perímetro = " . (2 * $base + 2 * $altura) . " cm <br>";
    echo "Superficie = " . $base * $altura . " cm cuadrados<br>";
    ?>
    <div class="mt-4 subtitle-1">b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</div><br>
    <?php
    $radio = 30;
    echo "Perímetro = " . (2 * M_PI * $radio) . " cm <br>";
    echo "Superficie = " . M_PI * ($radio * $radio) . " cm cuadrados<br>";
    ?>
</section>
<?php
require_once 'paginas/footertareas.php';
?>
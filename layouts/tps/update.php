<?php
// 1) Conexion
require_once '../conexion.php';
/*
// 2) Almacenamos los datos del envío GET
// a) generar variables para el id a utilizar
$id = $_GET["id"];

// 3) Preparar la orden SQL
//$eliminar = "DELETE FROM ropa WHERE id=$id";

// 4) Ejecutar la orden y eliminamos el regitro seleccionado
// a) ejecutar la consulta
// a) rederigir a pagina
//$datos = $mysqli->query($eliminar);

header("location:tp8_backend.php");

*/
if (isset($_POST['delete_clothes'])) {
  $id2 = $_POST['clothes_id'];
  $eliminar2 = "DELETE FROM ropa WHERE id=$id2";
  try {
    $datos = $mysqli->query($eliminar2);
    include("tp8_backend.php");
    echo '<script>
    document.getElementById("success").style.display = "block"
    </script>';
  } catch (Exception $e) {
    echo $e->getMessage(), "\n";
    include("tp8_backend.php");
    echo '<script>
    document.getElementById("error").style.display = "block"
    </script>';
  }
}

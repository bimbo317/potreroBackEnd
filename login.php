<?php
$user = $_POST["user"];
$pass = $_POST["password"];

// 1) Conexion y selección de base de datos
require_once('./layouts/conexion.php');

// 2) Preparar la orden SQL

$consulta = 'SELECT * FROM usuario';

// 3) Ejecutar la orden y obtenemos los registros
$datos1 = $mysqli->query($consulta);

while ($reg1 = mysqli_fetch_array($datos1)) {
    $usuario = $reg1['user'];
    $contra = $reg1['password'];
    if ($user == $usuario && $pass == $contra) {
        header("location:index.php");
    }
}
include("login.html");
echo '<script>
    document.getElementById("error").style.display = "block"
    </script>';

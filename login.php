<?php
$user = $_POST["user"];
$pass = $_POST["password"];

// 1) Conexion y selección de base de datos
$conexion = mysqli_connect("127.0.0.1", "root", "", null, "3366");
mysqli_select_db($conexion, "tienda"); // esto lo podemos poner acá o mas abajo, no hay problema

// 2) Preparar la orden SQL

$consulta = 'SELECT * FROM usuario';

// 3) Ejecutar la orden y obtenemos los registros
$datos1 = mysqli_query($conexion, $consulta);

while ($reg1 = mysqli_fetch_array($datos1)) {
    $usuario = $reg1['user'];
    $contra = $reg1['password'];
    if ($user == $usuario && $pass == $contra) {
        header("location:index.html");
    }
}
include("login.html");
echo '<script>
    document.getElementById("error").style.display = "block"
    </script>';

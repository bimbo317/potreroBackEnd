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
$existe = false;
$id_usuario = 0;
while ($reg1 = mysqli_fetch_array($datos1)) {
    $usuario = $reg1['user'];
    if ($user == $usuario) {
        $existe = true;
        $id_usuario = $reg1['id'];
    }
}
if ($existe == true) {
    $actualizar = "UPDATE usuario SET password = '$pass' WHERE usuario.id = $id_usuario";
    if (mysqli_query($conexion, $actualizar)) {
        include("recover.html");
        echo '<script>document.getElementById("ok").style.display = "block"</script>';
        echo '<script>document.getElementById("id_user").style.visibility = "hidden"</script>';
        echo '<script>document.getElementById("id_pass").style.visibility = "hidden"</script>';
        echo '<script>document.getElementById("form_recovery").style.display = "none"</script>';
        echo '<script>document.getElementById("form_volver").style.display = "inline"</script>';
    }
    //header("location:login.html");
} else {
    include("recover.html");
    echo '<script>
    document.getElementById("error").style.display = "block"
    </script>';
}

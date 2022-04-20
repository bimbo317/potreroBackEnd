<?php
$user =$_POST["user"];
$pass= $_POST["password"];
$usuario="bimbo";
$contra="bimbo";
if ($user==$usuario && $pass==$contra) {
    header("location:index.html");
} else {
    include("login.html");
    echo '<script>
    document.getElementById("error").style.display = "block"
    </script>';
}
?>
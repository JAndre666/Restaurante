<?php
include_once "conexion.php";


$sql = "call validarUsuario( ?, ?)";
$resultado=mysqli_query($dsn,$sql);
$filas=mysqli_num_rows($resultado);

$smt = $dbh->prepare($sql);

$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

$smt->bindParam(1, $usuario);
$smt->bindParam(2, $contraseña);
$smt->execute();


if($filas > 0){

    header("location:menu.php");
}else{

    echo "error en la autenticación";
}
mysqli_free_result($resultado);
?>
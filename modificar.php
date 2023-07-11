<?php
include ('database.php');

$id = $_POST["id"];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$consulta = $_POST['consulta'];

$sql="UPDATE consultas SET nombre='$nombre', correo='$correo', telefono='$telefono', consulta='$consulta' WHERE id='$id'";

$result = MySQLSESSION_ExecuteSQL($sql);

if (!$result) {

    echo 'Fallo la carga';
    die();
}

if($result){
    Header("Location: consultas.php");
}
?>


<?php
include("database.php");
//$result = MySQLSESSION_ExecuteSQL($sql);

$id = null;
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$consulta = $_POST['consulta'];

$sql="INSERT INTO consultas(id, nombre, correo, telefono, consulta) 
VALUES ('$id', '$nombre', '$correo', '$telefono', '$consulta')";

$result = MySQLSESSION_ExecuteSQL($sql);

if (!$result) {

    echo 'Fallo la carga';
    die();
}

if($result){
    Header("Location: consultas.php");
}
?>
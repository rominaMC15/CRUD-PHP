<?php
include ('database.php');

$id = $_GET["id"];

$sql="DELETE FROM consultas WHERE id='$id'";

$result = MySQLSESSION_ExecuteSQL($sql);

//$row=mysqli_fetch_array($result);

if($result){
    Header("Location: consultas.php");
}
?>
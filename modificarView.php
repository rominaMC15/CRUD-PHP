<?php 
    include("database.php");

    $id=$_GET['id'];

    $sql="SELECT * FROM consultas WHERE id='$id'";
    $result = MySQLSESSION_ExecuteSQL($sql);

    $row=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/styleConsultas.css" rel="stylesheet">
        <title>Modificar consultas</title>
        
    </head>
    <body>
        <div class="users-form">
        <h2>Modificar registro</h2>
            <form action="modificar.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>">
                <input type="email" name="correo" placeholder="Correo Electrónico" value="<?= $row['correo']?>">
                <input type="text" name="telefono" placeholder="Telefono" value="<?= $row['telefono']?>">
                <input type="text" name="consulta" placeholder="Consulta" value="<?= $row['consulta']?>"></input>

                <input type="submit" value="ACTUALIZAR">
            </form>
        </div>
    </body>
</html>
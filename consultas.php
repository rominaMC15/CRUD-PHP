<?php
include("database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styleConsultas.css">
    <title>Consultas</title>
</head>
<body>
    <div users-table>
        <h2>Consultas registradas</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Consulta</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $sql="select * from consultas";
  						 $result = MySQLSESSION_ExecuteSQL($sql);
  						 while ($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <th><?php echo $row['id'] ?></th>
                    <th><?php echo $row['nombre'] ?></th>
                    <th><?php echo $row['correo'] ?></th>
                    <th><?php echo $row['telefono'] ?></th>
                    <th><?php echo $row['consulta'] ?></th>

                    <th><a href="modificarView.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                    <th><a href="#" onclick="confirmDelete(<?php echo $row['id']; ?>)" class="users-table--delete">Eliminar</a></th>


                </tr>
                <?php
                         }
                ?>
            </tbody>
        </table>
    </div>
    <script src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        table{
            text-align: center;
            padding: 5px;
        }

        .centrar{
            margin: 0 auto;
            width: 45%;
        }
        body{
            background-color: darkblue;
            color: red;
        }
    </style>
</head>
<body>

<div class="centrar">

<form action="" method="POST">

    <table border="1" cellspcing="5" cellpadding="20">
        <thead>
        <td colspan="2">
            <h1>Registro de Usuarios</h1>
        </td>
        </thead>
        <tr>
            <td>ID:<input type="number" placeholder="especifica tu id" name="id"/></td>
            <td>Nombre:<input type="text" placeholder="Escribe tu Nombre" name="nombre" /></td>
        </tr>

        <tr>
            <td><input type="submit" value="Registrar" name="boton" /></td>
            <td>fecha de nacimiento <input type="date" class="dates" name="fechanac"/></td>
            
        </tr>
    </table>

</form>

</div>

<ul>
    <li><a href="http://localhost:8080/desarrollo/matriculacion.php">Registrar Rol</a></li>
    <li><a href="http://localhost:8080/desarrollo/index.php">Inicio</a></li>
    <li><a href="http://localhost:8080/desarrollo/index.php">nueva opcion</a></li>
</ul>

<?php

if(isset($_REQUEST['boton'])){
    include('php/procesos.php');
    $registro = new Usuarios();
    echo ($registro->insertarUser());
}
else {
    echo "Tabule Datos validos";
    }
?>
<a href=""></a>

</body>
</html>
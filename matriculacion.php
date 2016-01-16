<?php
include('php/procesos.php');
?>

<html>
<head>
<tirle></tirle>
</head>
<style>
    table{
        text-align: center;
    }
    td{
        padding: 2%;
    }
    .centrar{
        margin: 0 auto;
        width: 40%;
    }

    thead{
        background: black;
        color: white;
    }

</style>
<body>

    <div class="centrar">

    <form method="POST">
            <table  width="500">
                <thead>
                <td colspan="2">Registro de Roles</td>
                </thead>
                <tr>
                    <td>ID Rol: <input type="number" name="idrol" /></td>
                    <td>Nombre Rol: <input type="text" name="nombrerol" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Registrar" name="boton" > </td>
                </tr>
            </table>
    </form>
        <?php

        if(isset($_REQUEST['boton'])){

            $rol = new Roles();
            echo $rol->insertarRol();
        }
        else{
            echo "Tabule datos Correctos";
        }
        ?>

    </div>
<br>
    <div class="centrar">
        <form method="post">
            <table border="1" cellspacing="0" width="500">
                <thead>
                    <td>ID</td>
                    <td>Nombre Rol</td>
                    <td>Eliminar</td>
                </thead>
                <tbody>
                <?php
                $consulta = new Roles();
                $consulta->ObtenerRoles();
                ?>
                </tbody>
            </table>
        </form>
        <?php
        $var = new Roles();
        echo $var->eliminarRegistro();
        ?>
    </div>


</body>

</html>
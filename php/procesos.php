<?php

class Db{
        private $dbserver = "localhost";
        private $dbuser ="root";
        private $dbpass = "";
        public $conexion;

        function conectar(){
            $this->conexion = mysqli_connect($this->dbserver, $this->dbuser, $this->dbpass);
            if($this->conexion){
                return true;
            }
            else{
                return false;
            }
        }
    }

    class Usuarios{

    private $iduser = "";
    private $ususer = "";
    private $fecuser = "";
    private $pass_user = "";
    private $databuser ="dbuser";

        function recepcion(){

            if(isset($_POST['id']) and isset($_POST['nombre']) and isset($_POST['fechanac'])){

                $this->iduser = $_POST['id'];
                $this->ususer = $_POST['nombre'];
                $this->fecuser = $_POST['fechanac'];
                return true;
            }
            else{
                return false;
            }
        }
            function insertarUser(){
                $conect = new Db();
                if(($this->recepcion()) and ($conect->conectar())){

                    $sql = "insert into users values($this->iduser,'$this->ususer','$this->fecuser')";

                        mysqli_select_db($conect->conexion,$this->databuser);


                       if(mysqli_query($conect->conexion,$sql)){

                        return "Registrado Exitosamente";
                       }
                       else{
                        return "Error, no se puede insertar este registro";
                       }
                    }
                    else{
                        return "Error, no se puede insertar este registro";
                        }   
            }

    }

class Roles{

    private $id_rol;
    private $name_rol;
    private $dbuser ="dbuser";
    function recepcion(){

        if(isset($_POST['idrol']) and isset($_POST['nombrerol'])){

            $this->id_rol = $_POST['idrol'];
            $this->name_rol = $_POST['nombrerol'];
            return true;
        }
        else{
            return false;
        }
    }
    function insertarRol(){

        $conected = new Db();

        if(($this->recepcion()) and ($conected->conectar())){

            $sql ="insert into rol values($this->id_rol,'$this->name_rol')";

            mysqli_select_db($conected->conexion,$this->dbuser);

            if(mysqli_query($conected->conexion,$sql)){
                return "Registro Exitoso";
            }
            else{
                return "Error al Guardar";
            }
        }
        else{
            return "Error al Guardar";
        }
    }

    function ObtenerRoles(){
        $conexiones = new Db();
        if($conexiones->conectar()){

            $sql = "select * from rol";

            mysqli_select_db($conexiones->conexion,$this->dbuser);

            $buffer = mysqli_query($conexiones->conexion,$sql);

            while($row = mysqli_fetch_row($buffer)){
                echo "<tr>";

                    echo "<td>";
                        echo $row[0];
                    echo "</td>";

                    echo "<td>";
                        echo $row[1];
                    echo "</td>";

                    echo "<td>";
                                echo "<input type='submit' value='Delete' name='$row[0]'/>";
                    echo "</td>";

                echo "</tr>";
            }
        }
        else{
            echo "no hay registros";
        }

    }
    function eliminarRegistro(){


    }

}

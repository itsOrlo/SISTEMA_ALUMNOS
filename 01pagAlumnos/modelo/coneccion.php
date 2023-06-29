<?php

    function conectar(){
        
        $host="localhost";
        $user="root";
        $pass="";
        $db="plataformas";

        $conexion = mysqli_connect($host, $user, $pass);

        mysqli_select_db($conexion, $db);
         
        return $conexion;

    }
?>
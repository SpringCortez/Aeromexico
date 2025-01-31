<?php
    $conexion= new mysqli("localhost", "root", "", "aeromexico");
    if($conexion){
        echo "La gestion fue exitosa";
    }else{
        echo "La gestion NO fue exitosa";
    }





?>
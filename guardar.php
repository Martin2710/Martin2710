<?php
    //conectamos Con el servidor
    $conectar=new mysqli('localhost','root','');
    //verificamos conexión
    if(!$conectar){
        echo"No se pudo conectar con el servidor";
    }else{

        $base=mysqli_select_db($conectar,'prueba');
        if(!$base){
            echo"No se encontro la base de datos";
        }
    }
    ///recuperar variables
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];
    //sentencia sql
    $sql="INSERT INTO datos VALUES('$nombre',
                                    '$correo',
                                    '$mensaje')";
    //ejecutamos sentencia
    $ejecutar=mysqli_query($conectar,$sql);
    //verificar
    if(!$ejecutar){
        echo"Hubo algun error";
    }else{
        echo"Datos guardados correctamente<br><a href='index.html'>Volver</a>";
    }
?>
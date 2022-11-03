<?php
    include("config.php");  /* Se llama al archivo config.php*/

    $id_service=$_POST['id'];
    $nombre = $_POST['nombre'];
    $costo = $_POST['costo'];

    $sql="INSERT INTO services VALUES('$id_service', '$nombre','$costo')";     /*CODIGO EN SQL QUE INGRESA EL ID, NOMBRE Y COSTO A LA BASE DE DATOS DENOMINADA servicios*/

    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        
        echo 'window.location="registration-service.php";';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        
        echo 'window.location="registration-service.php";';
        echo '</script>';
    }
?>
<?php
    include("config.php");

    $id = $_GET['id'];                      //Usamos este valor para refernciarnos en una fila de datos

    $sql="DELETE FROM patients WHERE id='$id'";  //Selcccionamos todos los valores de nuestra tabla

    if(mysqli_query($mysqli, $sql))         //Usamos un condicinal para  aplicar la inserción de eliminacion
    {
        echo '<script language="javascript">';
        
        echo 'window.location="registration-patients.php";';
        echo '</script>';
    }
    else                                    //Un else si en caso no funciona la insercion 
    {
        echo '<script language="javascript">';
        
        echo 'window.location="registration-patients.php";';
        echo '</script>';
    }
?>
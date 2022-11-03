<?php
include("config.php");

    $id_patients=null;                                   //Asignamos nuestro valores del html de index.php
    $dni = $_POST['dni'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];                   //Hasta aquí Asignamos nuestro valores del html de index.php

    $sql="INSERT INTO patients VALUES('$id_patients','$dni', '$name','$phone_number','$address','$email')";   //Asignamos los valores a nuestra tabla de nuestra base de datos 

    if(mysqli_query($mysqli, $sql)){                             //Usamos un condicinal para  aplicar la inserción para el ingreso de datos
        echo '<script language="javascript">';
        
        echo 'window.location="registration-patients.php";';
        echo '</script>';
    }
    else{                                                       //Un else si en caso no funciona la insercion
        echo '<script language="javascript">';
        
        echo 'window.location="registration-patients.php";';
        echo '</script>';
    }
?>
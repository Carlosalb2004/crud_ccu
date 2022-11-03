<?php
    include("config.php");

    $id = $_POST['id'];         //Asignamos nuestro valores del html de update.php
    $dni=$_POST['dni'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];  //Hasta aquí Asignamos nuestro valores del html de update.php
   
    $sql="UPDATE patients SET dni='$dni', name='$name', phone_number='$phone_number', address='$address', email='$email' WHERE id='$id'";  //Asignamos los valores a nuestra tabla de nuestra base de datos 

    if(mysqli_query($mysqli, $sql)){                      //Usamos un condicinal para  aplicar la inserción para la edicion 
        echo '<script language="javascript">';
        
        echo 'window.location="registration-patients.php";';
        echo '</script>';
    }
    else{                                                   //Un else si en caso no funciona la insercion 
        echo '<script language="javascript">';
        
        echo 'window.location="registration-patients.php";';
        echo '</script>';
    }
?>
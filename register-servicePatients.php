<?php
    include("config.php");  /* Se llama al archivo config.php*/
    $id_sp=null;
    $id_u = $_POST['id_users'];
    $id_p = $_POST['id_patients'];
    $id_s = $_POST['id_service'];
    $date_of_delivery = $_POST['date_of_delivery'];
    $date = date('Y-m-d H:i:s');

    $sql="INSERT INTO servicepatients(id_sp,id_u,id_p,id_s,date_of_delivery,date) VALUES('$id_sp','$id_u', '$id_p','$id_s','$date_of_delivery','$date')";     /*CODIGO EN SQL QUE INGRESA EL ID, NOMBRE Y COSTO A LA BASE DE DATOS DENOMINADA servicios*/

    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        echo 'window.location="registration-servicePatients.php";';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        echo 'window.location="registration-servicePatients.php";';
        echo '</script>';
    }
?>
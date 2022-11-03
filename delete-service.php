<?php
    include("config.php");

    $id = $_GET['id'];

    $sql="DELETE FROM services WHERE id='$id'";    /*  CODIGO EN SQL QUE ELIMINA DATOS */

    if(mysqli_query($mysqli, $sql))
    {
        echo '<script language="javascript">';
        
        echo 'window.location="registration-service.php";';
        echo '</script>';
    }
    else
    {
        echo '<script language="javascript">';
        
        echo 'window.location="registration-service.php";';
        echo '</script>';
    }
?>
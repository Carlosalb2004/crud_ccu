<?php
    include("config.php");
    include("session.php");

    $id_users=null; 
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql="INSERT INTO users VALUES('$id_users','$firstname','$lastname','$birthdate','$username','$password')";

    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        
        echo 'window.location="registration-users.php";';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        
        echo 'window.location="registration-users.php";';
        echo '</script>';
    }
?>
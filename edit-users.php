<?php
    include("config.php");
    include("session.php");

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql="UPDATE users SET firstname='$firstname', last_name='$lastname', birthday='$birthdate', username='$username', password='$password'
    WHERE username='$id'";

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


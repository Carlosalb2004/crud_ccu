<?php 
    include("config.php");                                      //incluimos al archivo config.php ya que tiene la variable $msqli

    $id=$_GET['id'];                                            // Creamos nueva variable con un valor de arreglo

    $sql="SELECT * FROM patients WHERE id='$id'";
    $query=mysqli_query($mysqli, $sql);                         //asignamos la variable $query con la funcion mysqli_query
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>                                                                   <!--creamos nuestro head-->
        <meta charset="UTF-8">                                                               
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style-patients.css?ts=<?=time()?>" />   <!--Asignamos nuestro CSS, para el diseño-->
        <title>Editar Paciente</title>
        
    </head>
    <div>
    <?php
  include("header.php");
    ?>
  </div>
    <body>
        <div class="users-form">                                                                
            <form action="edit-patients.php" method="POST">                                              <!--creamos nuestro formulario para editar los datos de los clientes creados-->
                <h1>Editar datos del Cliente</h1>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Ingrese los nuevos datos del Cliente
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>                                                                                     
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <p>Actualizar DNI</p>
                <input type="text" name="dni" placeholder="Dni" value="<?= $row['dni']?>">
                <p>Actualizar Nombre</p>
                <input type="text" name="name" placeholder="Nombre" value="<?= $row['name']?>">
                <p>Actualizar Numero Telefonico</p>
                <input type="text" name="phone_number" placeholder="Numero Telefonico" value="<?= $row['phone_number']?>">
                <p>Actualizar Direccion</p>
                <input type="text" name="address" placeholder="Direccion" value="<?= $row['address']?>">
                <p>Actualizar Email</p>
                <input type="text" name="email" placeholder="Email" value="<?= $row['email']?>">      <!--Hasta aquí nuestro formulario para editar los datos de los clientes creados-->

                <input type="submit" onclick="edit()" value="Actualizar">
            </form>
        </div>
        <script>
        function edit()
        {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Cambios guardados',
                html: 'Click para continuar',
                timer: 4500
                })
        }
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>
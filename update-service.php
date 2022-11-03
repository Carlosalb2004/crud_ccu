<?php 
    include("config.php");

    $id=$_GET['id'];

    $sql="SELECT * FROM services WHERE id='$id'";  /* CODIGO EN SQL QUE SELECCIONA LOS DATOS DE LA BASE DE DATOS servicios */ //FALTA CAMBIAR SERVICIOS
    $query=mysqli_query($mysqli, $sql);
    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style-service.css?ts=<?=time()?>" rel="stylesheet" type="text/css">
        <title>Editar Servicio</title>
    </head>
    <div>
    <?php
  include("header.php"); 
    ?>
  </div>
    <body>
        <div class="users-form">
            <form action="edit-service.php" method="POST">  <!-- SE LLAMA AL ARCHIVO edit.php --> <!-- FALTA HACER /Ya esta echo  -->
                <h1>Editar datos del Servicio</h1>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                Ingrese los nuevos datos del servicio
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <p>Actualizar Nombre</p>
                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>">
                <p>Actualizar Costo</p>
                <input type="text" name="costo" placeholder="Costo del Servicio" value="<?= $row['costo']?>">
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
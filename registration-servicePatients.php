<?php
    //Registration-Servicios Clientes
    include("config.php");
    include("session.php");

?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro de Servicio Paciente</title>
        <link rel="stylesheet" type="text/css" href="style-users.css?ts=<?=time()?>" />
        <meta name=""viewport content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        
    </head>
    
    <div>
    <?php
include("header.php"); 
    ?>
</div>
<div>
    <body>
    <script>
        function add()
        {
            Swal.fire(
                'Servicio Agregado',
                'Click para continuar',
                'success'
                )
        }
    </script>
    <div class="users-form">
        <form action="register-servicePatients.php" method="POST">
            <h1>Ingresar datos de Servicio Paciente</h1>
            <input type="text" name="id_users" placeholder="Id Usuario" list="busqueda_u">
            <datalist id="busqueda_u">
                <option>
                <?php 
                    $sql = "SELECT * FROM users"; 
                    $query = mysqli_query($mysqli, $sql);

                while ($row = mysqli_fetch_array($query)): ?>
                        <option><?= $row['id'] ?></option>
                <?php endwhile; ?>
                </option>
            </datalist>
            <input type="text" name="id_patients" placeholder="Id Patients" list="busqueda_p">
            <datalist id="busqueda_p">
                <option>
                <?php 
                    $sql = "SELECT * FROM patients"; 
                    $query = mysqli_query($mysqli, $sql);

                while ($row = mysqli_fetch_array($query)): ?>
                        <option><?= $row['id'] ?></option>
                <?php endwhile; ?>
                </option>
            </datalist>
            <input type="text" name="id_service" placeholder="Id Service" list="busqueda_s">
            <datalist id="busqueda_s">
                <option>
                <?php 
                    $sql = "SELECT * FROM services"; 
                    $query = mysqli_query($mysqli, $sql);

                while ($row = mysqli_fetch_array($query)): ?>
                        <option><?= $row['id'] ?></option>
                <?php endwhile; ?>
                </option>
            </datalist>
            <input type="date" placeholder="Fecha de Entrega" name="date_of_delivery">
            <input type="submit" onclick="add()" value="Agregar">
        </form> 
    </div>  
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</div>
<div class="users-table">
    <br>
    <Registrados>Servicios Pacientes Registrados</h2>
    <br>
    <table>                     <!--creamos la tabla para mostrar los clientes creados-->
        <thead>
            <tr>
                <th>ID</th>
                <th>ID_USUARIOS</th>
                <th>ID_PACIENTES</th>
                <th>ID_SERVICIOS</th>
                <th>FECHA DE ENTREGA</th>
                <th>FECHA/HORA REALIZADA</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql = "SELECT * FROM servicepatients"; 
            $query = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <td><?= $row['id_sp'] ?></td>
                    <td><?= $row['id_u'] ?></td>
                    <td><?= $row['id_p'] ?></td>
                    <td><?= $row['id_s'] ?></td>
                    <td><?= $row['date_of_delivery'] ?></td>
                    <td><?= $row['date'] ?></td>
                </tr>             
            <?php endwhile; ?>
        </tbody>
    </table>
    <br>
    <br>
</div>

</html>  
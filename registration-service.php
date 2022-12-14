<?php
include("config.php");
$sql = "SELECT * FROM services";  //cambiado a service
$query = mysqli_query($mysqli, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Servicios</title>
    <link rel="stylesheet" href="style-service.css?ts=<?= time() ?>">
    <!--se llaman a los estilos en el archivo style.css-->
    <meta name="" viewport content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<div>
    <?php
    include("header.php");
    ?>
</div>
<div>

    <body>
        <div class="users-form">
            <form action="register-service.php" method="POST">
                <h1>Ingresar datos del Servicio</h1>
                <input type="text" name="nombre" placeholder="Nombre del Servicio" required>
                <input type="text" name="costo" placeholder="Costo del Servicio" required>
                <input type="submit" onclick="add()" value="Agregar">
            </form>
        </div>
    </body>
    <script>
        function del() {
            Swal.fire(
                'Servicio Eliminado',
                'Click para continuar',
                'success'
            )
        }

        function add() {
            Swal.fire(
                'Servicio Agregado',
                'Click para continuar',
                'success'
            )
        }
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</div>
<br>
<h2>Servicios Registrados</h2>
<br>
<div class="container">
    <div class="table-responsive">
        <table class="table table-light">
            <div class="users-table">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>COSTO</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['nombre'] ?></td>
                            <td><?= $row['costo'] ?></td>
                            <!-- al hacer click se env??a al usuario al archivo update.php-->
                            <td><a href="update-service.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></td>
                            <!--Falta Hacer/Ya esta echo -->
                            <!-- al hacer click se env??a al usuario al archivo delete.php-->
                            <td><a onclick="del()" href="delete-service.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </div>
        </table>
    </div>
</div>

</html>
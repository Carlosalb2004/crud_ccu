<?php
//Registration-Users
include("config.php");
include("session.php");
$sql = "SELECT * FROM users";
$query = mysqli_query($mysqli, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="style-users.css?ts=<?= time() ?>" />
    <meta name="" viewport content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
</head>

<div>
    <?php
    include("header.php");
    ?>
</div>
<div>

    <body>

        <div class="users-form">
            <form action="register-users.php" method="POST">
                <h1>Ingresar datos del Usuario</h1>
                <input type="text" placeholder="Nombre" name="firstname" required>
                <input type="text" placeholder="Apellido" name="lastname" required>
                <input type="date" name="birthdate" required>
                <input type="text" placeholder="Usuario" name="username" required>
                <input type="password" placeholder="Contraseña" name="password" required>
                <input type="submit" onclick="add()" value="Agregar">
            </form>
        </div>
        <script>
            function del() {
                Swal.fire(
                    'Usuario Eliminado',
                    'Click para continuar',
                    'success'
                )
            }

            function add() {
                Swal.fire(
                    'Usuario Agregado',
                    'Click para continuar',
                    'success'
                )
            }
        </script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</div>

<br>
<h2>Usuarios registrados</h2>
<br>
<div class="container">
    <div class="table-responsive">
        <table class="table table-light">
            <div class="users-table">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>CUMPLEAÑOS</th>
                        <th>USUARIO</th>
                        <th>CONTRASEÑA</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_array($query)) : ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['firstname'] ?></th>
                            <td><?= $row['last_name'] ?></td>
                            <td><?= $row['birthday'] ?></td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['password'] ?></td>
                            <td><a href="update-users.php?id=<?= $row['username'] ?>" class="users-table--edit">Editar</a></td>
                            <td><a onclick="del()" href="delete-users.php?id=<?= $row['username'] ?>" class="users-table--delete">Eliminar</a></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </div>
        </table>
        <br>
        <br>
    </div>
</div>

</html>
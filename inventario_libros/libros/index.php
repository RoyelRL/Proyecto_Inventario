<?php

require '../conexion/database.php';

$db = new Database();
$con = $db->conectar();
$comando = $con->prepare("SELECT * FROM `libro`");
$comando->execute();

$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<body class="py-3">
<header>
<nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="../index.php" aria-current="page">INICIO</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../libros/">LIBROS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../usuarios/">USUARIO</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="../alumnos/">ALUMNOS</a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">LIBROS PRESTADOS</a>

            </li>
        </ul>
    </nav>
  </header>
    
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col-12">
                    <h4>LIBROS
                        <a href="nuevo.php" class="btn btn-primary float-right">Nuevo</a>
                    </h4>
                </div>
            </div>

            <div class="row py-3">
                <div class="col">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Código</th>
                                <th>nombre</th>
                                <th>autor</th>
                                <th>tomo</th>
                                <th>carrera</th>
                                <th>categoria</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($resultado as $libro) {
                            ?>
                                <tr>
                                    <td><?php echo $libro['id']; ?></td>
                                    <td><?php echo $libro['codigo']; ?></td>
                                    <td><?php echo $libro['nombre_libro']; ?></td>
                                    <td><?php echo $libro['autor']; ?></td>
                                    <td><?php echo $libro['tomo']; ?></td>
                                    <td><?php echo $libro['carrera']; ?></td>
                                    <td><?php echo $libro['categoria']; ?></td>
                                    <td><a href="../prestamos/formulario_prestamo.php?id=<?php echo $libro['id']; ?>" class="btn btn-warning">prestar</a></td>
                                    <td><a href="editar.php?id=<?php echo $libro['id']; ?>" class="btn btn-warning">Editar</a></td>
                                    <td><a href="eliminar.php?id=<?php echo $libro['id']; ?>" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
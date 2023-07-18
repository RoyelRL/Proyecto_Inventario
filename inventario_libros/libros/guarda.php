<?php

require '../conexion/database.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $tomo=$_POST['tomo'];
    $carrera = $_POST['carrera'];
    $categoria = $_POST['categoria'];

    $query = $con->prepare("UPDATE libro SET codigo=?, nombre=?, autor=?, tomo=?,  carrera=?,categoria=?  WHERE id=?");
    $resultado = $query->execute(array($codigo, $nombre, $autor, $tomo,$carrera,$categoria, $id));

    if ($resultado) {
        $correcto = true;
    }
} else {
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $tomo=$_POST['tomo'];
    $carrera = $_POST['carrera'];
    $categoria = $_POST['categoria'];

    $query = $con->prepare("INSERT INTO libro (codigo, nombre_libro, autor, tomo, carrera, categoria) VALUES (:cod, :nom, :aut, :tom, :carr,:catego)");
    $resultado = $query->execute(array('cod' => $codigo, 'nom' => $nombre, 'aut' => $autor, 'tom' => $tomo, 'carr' => $carrera, 'catego' => $categoria));

    if ($resultado) {
        $correcto = true;
        echo $con->lastInsertId();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/estilos.css">
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <?php if ($correcto) { ?>
                        <h3>Registro guardado</h3>
                    <?php } else { ?>
                        <h3>Error al guardar</h3>
                    <?php }  ?>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a class="btn btn-primary" href="index.php">Regresar</a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
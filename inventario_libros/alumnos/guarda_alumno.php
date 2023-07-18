<?php

require '../conexion/database.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $carrera = $_POST['carrera'];
    $semestre = $_POST['semestre'];

    $query = $con->prepare("UPDATE alumnos SET nombre=?,apellidos=?,  carrera=?, semestre=?  WHERE id=?");
    $resultado = $query->execute(array( $nombre,$apellidos,$carrera,$semestre, $id));
    if ($resultado) {
        $correcto = true;
    }

   
} else {
   
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $carrera = $_POST['carrera'];
    $semestre = $_POST['semestre'];
    echo "$nombre  //  $apellidos  // $carrera  // $semestre";
    $query = $con->prepare("INSERT INTO alumnos (nombre,apellidos, carrera, semestre) VALUES (:nom,:ape, :carr,:sem)");
    $resultado = $query->execute(array('nom' => $nombre,'ape'=>$apellidos, 'carr' => $carrera, 'sem' => $semestre));
    if ($resultado) {
        $correcto = true;
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
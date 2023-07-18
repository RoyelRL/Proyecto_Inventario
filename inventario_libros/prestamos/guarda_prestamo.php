<?php

require '../conexion/database.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;


    
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $carrera = $_POST['carrera'];
    $semestre = $_POST['semestre'];
    $libro=$_POST['libro'];
    $fecha_pre=$_POST['fecha_prestamo'];
    $fecha_en=$_POST['fecha_entrega'];
    $id_libro=$_POST['id_libro'];

    $query = $con->prepare("INSERT INTO alumnos (nombre,apellidos, carrera, semestre) VALUES (:nom,:ape, :carr,:sem)");
    $resultado = $query->execute(array('nom' => $nombre,'ape'=>$apellidos, 'carr' => $carrera, 'sem' => $semestre));
    
    $bsq =$con->prepare("SELECT * FROM `alumnos` WHERE `nombre` LIKE '$nombre' AND `apellidos` LIKE '$apellidos'");
    $bsq->execute();
    $datbs = $bsq->fetch();
    $params_id = $datbs['id'];
    

    $query = $con->prepare("INSERT INTO prestamos (nombre_alumno,nombre_libro, fecha_prestamo, fecha_devolucion) VALUES (?,?,?,?)");
    $resultado = $query->execute(array( $params_id,$id_libro, $fecha_pre, $fecha_en));

    if ($resultado) {
        $correcto = true;
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
                    <a class="btn btn-primary" href=".php">Regresar</a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
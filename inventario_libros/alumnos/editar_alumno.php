<?php

require '../conexion/database.php';

$db = new Database();
$con = $db->conectar();

$id = $_GET['id'];

$query=$con->prepare("SELECT * FROM `alumnos`WHERE id = :id ");
$query->execute(['id' => $id]);
/*$activo = 1;

$query = $con->prepare("SELECT nombre, descripcion, inventariable, stock FROM libro WHERE id = :id AND activo=:activo");
$query->execute(['id' => $id, 'activo' => $activo]);*/
$num = $query->rowCount();
if ($num > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="py-3">
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <h4>Nuevos registro</h4>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="guarda_alumno.php" autocomplete="off">
                        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                        <div class="col-md-4">
                            <label for="nombre" class="form-label">nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>" required autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="apellidos" class="form-label">apellidos</label>
                            <input type="text" id="apellidos" name="apellidos" class="form-control" value="<?php echo $row['apellidos']; ?>" required autofocus>
                        </div>
                        <div class="col-md-4">
                            
                            <label for="carrera" class="form-label">carrera</label>
                            <input type="text" id="carrera" name="carrera" class="form-control" value="<?php echo $row['carrera']; ?>" required autofocus>
                        </div>

                        <div class="col-md-4">
                            <label for="semestre" class="form-label">semestre</label>
                           
                            <input type="text" id="semestre" name="semestre" class="form-control" value="<?php echo $row['semestre']; ?>" required>
                        </div>
                        

                        <div class="col-md-12">
                            <a class="btn btn-secondary" href="index.php">Regresar</a>
                            <button type="submit" class="btn btn-primary" name="registro">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
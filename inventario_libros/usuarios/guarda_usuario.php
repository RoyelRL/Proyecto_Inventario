
<?php

require '../conexion/database.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;

if (isset($_POST['id'])) {

    $id = $_POST['id'];
    $nombre=$_POST['nombre'];
    $usuario= $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $sontra2 = $_POST['confirmar_contraseña'];
    $clave=password_hash($contraseña,PASSWORD_BCRYPT,["cost"=>5]);

    $query = $con->prepare("UPDATE usuarios SET nombre=?, usuario=?, contraseña=? WHERE id=?");
    $resultado = $query->execute(array($nombre, $usuario, $clave, $id));

    if ($resultado) {
        $correcto = true;
    }
} else {
    
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    $contraseña2=$_POST['verificar_contraseña'];
   
        $clave=password_hash($contraseña,PASSWORD_BCRYPT,["cost"=>5]);
    
    $query = $con->prepare("INSERT INTO usuarios (nombre, usuario, contraseña ) VALUES ( :nom, :usu, :con)");
    $resultado = $query->execute(array('nom' => $nombre,  'usu' => $usuario, 'con' => $clave));

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
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
                    <form class="row g-3" method="POST" action="guarda_usuario.php" autocomplete="off">

                    <div class="col-md-4">
                            <label for="nombre" class="form-label">nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>" required autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="usuario" class="form-label">usuario</label>
                            <input type="text" id="usuario" name="usuario" class="form-control" value="<?php echo $row['usuario']; ?>" required autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="contraseña" class="form-label">contraseña</label>
                            <input type="password" id="contraseña" name="contraseña" class="form-control" value="<?php echo $row['contraseña']; ?>" required autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="confirmar_contraseña" class="form-label">confirmar_contraseña</label>
                            <input type="password" id="confirmar_contraseña" name="confirmar_contraseña" class="form-control" value="<?php echo $row['confirmar_contraseña']; ?>" required autofocus>
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
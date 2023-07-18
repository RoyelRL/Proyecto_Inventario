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
                    <form class="row g-3" method="POST" action="guarda.php" autocomplete="off">

                        <div class="col-md-4">
                            <label for="codigo" class="form-label">Código</label>
                            <input type="text" id="codigo" name="codigo" class="form-control" required autofocus>
                        </div>

                        <div class="col-md-4">
                            <label for="codigo" class="form-label">nombre</label>
                            <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $row['nombre']; ?>" required autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="autor" class="form-label">autor</label>
                            <input type="text" id="autor" name="autor" class="form-control" value="<?php echo $row['autor']; ?>" required autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="carrera" class="form-label">carrera</label>
                            <input type="text" id="carrera" name="carrera" class="form-control" value="<?php echo $row['carrera']; ?>" required autofocus>
                        </div>

                        <div class="col-md-4">
                            <label for="categoria" class="form-label">categoria</label>
                            <input type="text" id="categoria" name="categoria" class="form-control" value="<?php echo $row['categoria']; ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="tomo" class="form-label">tomo</label>
                            <input type="number" id="tomo" name="tomo" class="form-control" value="<?php echo $row['tomo']; ?>" required autofocus>
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
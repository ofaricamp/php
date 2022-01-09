<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Confirmacion de borrado de articulo</title>
</head>

<body>
    <div class="py-5 container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Confirmación borrado</h1>
                <p class="lead text-muted">Seguro que quieres borrar el articulo <?= $articulo['nombre'] ?>?</p>
                <p>
                    <button type="button" onclick="history.back()" class="btn btn-default my-2">Cancelar</button>
                    <button type="button" onclick="document.getElementById('borrarArticuloForm').submit()" class="btn btn-danger my-2">Borrar</button>
                </p>
            </div>
        </div>
        <form action="../Controlador/borrarArticulo.php" id="borrarArticuloForm" method="post">
            <input type="hidden" name="id" value="<?= $articulo['id'] ?>">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
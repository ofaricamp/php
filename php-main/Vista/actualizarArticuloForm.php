<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Actualizar articulo</title>
</head>

<body>
    <div class="container">
        <div class="row mb-4">
            <div class="col-8">
                <span class="display-4">Actualizar articulo</span>
                <form action="../Controlador/actualizarArticulo.php" method="post">
                    <input type="hidden" name="id" value="<?= $articulo['id']?>">
                    <div class="row mb-3 mt-3">
                        <div class="col-8">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $articulo['nombre']?>">
                        </div>
                        <div class="col-4">
                            <label for="valoracion" class="form-label">Valoración</label>
                            <input type="text" class="form-control" name="valoracion" id="valoracion" value="<?= $articulo['valoracion']?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="text" class="form-control" name="precio" id="precio" value="<?= $articulo['precio']?>">
                        </div>
                        <div class="col">
                            <label for="descuento" class="form-label">Descuento</label>
                            <input type="number" class="form-control" name="descuento" id="descuento"value="<?= $articulo['descuento']?>">
                        </div>
                        <div class="col">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="text" class="form-control" name="stock" id="stock"value="<?= $articulo['stock']?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="imagen" class="form-label">Imagen</label>
                            <input type="text" class="form-control" name="imagen" id="imagen"value="<?= $articulo['imagen']?>">
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
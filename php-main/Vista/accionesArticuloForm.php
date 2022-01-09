<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Catalogo De Juegos De Mesecilla</title>
</head>

<body>
    <div class="py-5 container">


        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
            <a href="../Controlador/listarArticulos.php" class="btn btn-primary">Ir a la lista</a>
        </div>

        <span class="display-4">Nuevo articulo</span>
        <form action="../Controlador/crearArticulo.php" method="post">
            <div class="row mb-3 mt-3">
                <div class="col-8">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="col-4">
                    <label for="valoracion" class="form-label">Valoración</label>
                    <input type="text" class="form-control" name="valoracion" id="valoracion">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" class="form-control" name="precio" id="precio">
                </div>
                <div class="col">
                    <label for="descuento" class="form-label">Descuento</label>
                    <input type="number" class="form-control" name="descuento" id="descuento">
                </div>
                <div class="col">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="text" class="form-control" name="stock" id="stock">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="imagen" class="form-label">Imagen</label>
                    <input type="text" class="form-control" name="imagen" id="imagen">
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-success">Añadir</button>
            </div>
        </form>

        <hr class="my-4">
        
        <span class="display-4">Actualizar articulo</span>
        <form class="row g-3 mt-3" action="../Controlador/actualizarArticulo.php" method="get">
            <div class="col-auto">
                <label for="idActualizar" class="visually-hidden">ID</label>
                <input type="number" class="form-control" name="id" id="idActualizar" placeholder="ID">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Actualizar</button>
            </div>
        </form>

        <hr class="my-4">
        
        <span class="display-4">Borrar articulo</span>
        <form class="row g-3 mt-3" action="../Controlador/borrarArticulo.php" method="get">
            <div class="col-auto">
                <label for="idBorrar" class="visually-hidden">ID</label>
                <input type="number" class="form-control" name="id" id="idBorrar" placeholder="ID">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Borrar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
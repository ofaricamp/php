<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Lista de articulos</title>
</head>

<body>
  <div class="container">
    <div class="row mb-4">
      <div class="col-8">
        <span class="display-4">Listado de articulos</span>
      </div>
      <div class="col-4 mt-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <a href="../Controlador/accederAccionesArticulo.php" class="btn btn-primary">Acciones</a>
        </div>
      </div>
    </div>
    <div class="row">
      <?php foreach ($informacion as $articulo) { ?>
        <div class="col-md-4 mb-3">
          <div class="card h-100">
            <a href="#">
              <img src="<?= $articulo['imagen'] ?? 'https://www.detallesmasbonitaqueninguna.com/server/Portal_0015715/img/products/no_image_xxl.jpg' ?>" class="card-img-top" alt="Product">
            </a>
            <div class="card-body px-2 pb-2 pt-1">
              <div class="d-flex justify-content-between">
                <div>
                  <p class="h4"><?= $articulo['nombre'] ?></p>
                </div>
              </div>
              <div class="d-flex mb-3 justify-content-between">
                <div>
                  <p class="mb-0">
                    <b>Precio: </b>
                    <?php if ($articulo['descuento'] > 0) { ?>
                      <span class="text-danger"><del><?= $articulo['precio'] ?>€</del></span>
                    <?php } ?>
                    <?= $articulo['precioFinal'] ?>€
                  </p>
                  <p class="mb-0"><b>Stock: </b> <?= $articulo['stock'] ?></p>
                </div>
                <div class="text-right">
                  <p class="mb-0"><b>Valoración: </b><?= $articulo['valoracion'] ?>/10</p>
                  <?php if ($articulo['descuento'] > 0) { ?>
                    <p class="mb-0 text-primary">
                      <b>Te ahorras:</b> <?= $articulo['valorDescuento'] ?>€ (<?= $articulo['descuento'] ?>%)
                    </p>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<?php  ?>
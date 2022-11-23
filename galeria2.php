<?php

include ("modelo/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/galeria1.css">
</head>
<body>
<div class="container-fluid">
  <div class="px-lg-5">

    <!-- For demo purpose -->
    <div class="row py-5">
      <div class="col-lg-12 mx-auto">
        <div class="text-white p-5 shadow-sm rounded banner">
          <h1 class="display-4">Recetas de carne</h1>
          <p class="lead">Recetas fáciles de hacer.</p>
          <p class="lead">Elige una receta y disfruta creandola.</p>
        </div>
      </div>
    </div>
    <!-- End -->
    <form action="controlador/carne.php" method="POST">
    <div class="row">
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/13.jpg"  alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <label><input type="submit"  name="enviando" value="Albondigas"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/14.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <label><input type="submit"  name="enviando" value="Cordero miel y mostaza"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/15.jfif" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <label><input type="submit"  name="enviando" value="Pollo con almendras"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/16.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Estofado"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/17.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Solomillo a la pimienta"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/18.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Conejo en salsa española"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/19.jfif" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Costillas a la parrilla"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/20.png" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Revuelto de morcilla"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/21.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Sándwich de Frankfurt"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/22.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Pulled pork"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elits</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/23.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Filetes de pavo a la naranja"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/24.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Sesos rebozados"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->
  </form>
    </div>
    <div class="py-5 text-right"><a href="index.html" class="btn btn-dark px-5 py-3 text-uppercase">Volver al inicio</a></div>
  </div>
</div>

</body>
</html>
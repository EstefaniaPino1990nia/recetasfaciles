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
          <h1 class="display-4">Recetas de verduras</h1>
          <p class="lead">Recetas fáciles de hacer.</p>
          <p class="lead">Elige una receta y disfruta creandola.</p>
        </div>
      </div>
    </div>
    <!-- End -->
    <form action="controlador/verdura.php" method="POST">
    <div class="row">
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/25.jfif"  alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <label><input type="submit"  name="enviando" value="Revuelto de espinacas"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/26.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <label><input type="submit"  name="enviando" value="Lasaña de verduras"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/27.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
            <label><input type="submit"  name="enviando" value="Crema de calabaza"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/28.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Brochetas de verduras"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/29.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Medallones de verduras"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/30.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Sopa de verduras"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/31.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Ensalada variada"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/32.jpeg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Tomates rellenos"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/33.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Escalivada de verduras"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/34.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Salmorejo"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/35.jpeg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Ensalada de quinoa"></label>
            <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
            </div>
          </div>
        </div>
      </div>
      <!-- End -->

      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm"><img src="imagenes/recetas/36.jpg" alt="" class="img-fluid card-img-top">
          <div class="p-4">
          <label><input type="submit"  name="enviando" value="Revuelto de esparragos"></label>
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
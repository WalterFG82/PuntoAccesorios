<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Punto Accesorios</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>


                </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                      <a class="btn btn-primary" href="loguin.html" role="button">VENDEDORES</a>


                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->

        <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    Nuestros Productos
  </a>
  <a href="cinturones.php" class="list-group-item list-group-item-action">CINTURONES</a>
  <a href="billeteras.php" class="list-group-item list-group-item-action">BILLETERAS</a>
  <a href="paraguas.php" class="list-group-item list-group-item-action">PARAGUAS</a>
  <a href="riñoneras.php" class="list-group-item list-group-item-action">RIÑONERAS</a>
  <a href="tiradores.php" class="list-group-item list-group-item-action">TIRADORES</a>

</div>


         <header class="bg-blue py-5">
      <div class="container px-4 px-lg-5 my-5">
          <div class="text-center text-black">
              <h1 class="display-4 fw-bolder">BILLETERAS</h1>
                <p class="lead fw-normal text-black-50 mb-0">Accesorios a tu medida</p>
          </div>
      </div>
  </header>
  <section class="py-5">
      <div class="container px-4 px-lg-5 mt-5">
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            <?php
                  // 1) Conexion
                  $conexion = mysqli_connect("127.0.0.1", "root", "");
                     mysqli_select_db($conexion, "tienda");


                  // 2) Preparar la orden SQL
                  // Sintaxis SQL SELECT
                  // SELECT * FROM nombre_tabla
                  // => Selecciona todos los campos de la siguiente tabla
                  // SELECT campos_tabla FROM nombre_tabla
                  // => Selecciona los siguientes campos de la siguiente tabla

                  $consulta="SELECT * FROM `ropa` WHERE `prenda` = 'Billetera'";

                  // 3) Ejecutar la orden y obtenemos los registros
                  $datos= mysqli_query($conexion, $consulta);

                  //  recorro todos los registros y genero una CARD PARA CADA UNA
                  while ($reg = mysqli_fetch_array($datos)) {?>

                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen'])?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo ucwords($reg['marca']) ?></h5>
                                    <!-- Product price-->
                                  <h2>$<?php echo $reg['precio']; ?></h2>
                                </div>
                            </div>
                           <!-- Product actions-->
                      <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"> <?php// echo $reg['link']; ?></div>
                        <br>
                        <a href="productos.php?id=<?php echo $reg['id'];?>"> <button type="button" name="button">Ver producto</button></a>
                      </div>
                  </div>
              </div>

                  <?php } ?>

                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-primary">
            <div class="container"><p class="m-0 text-center text-white">Copyright 2024 &copy; WALTER GOMEZ. Todos los derechos reservados</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

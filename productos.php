<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muebleria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col my-5"> 

            <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="productos.php">Todos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">sillon capri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">Mesa ipanema</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php">Banco venecia</a>
                    </li>

                    </ul>

            <?php
            include ("config.php");

            $conexion = mysqli_connect(HOST, USER, PASS, BD);

               if (!$conexion) {
                die ("error de conexion con la base de datos!");
               }

               $consulta = 'SELECT * FROM productos';
               $resultado = mysqli_query($conexion, $consulta);
               $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);


               foreach ($filas as $fila) {
                    echo '<div class="row">';
                    echo '<div class="col-md-8">';
                    echo '<h3>' .$fila["nombre_producto"] .'</3>';
                    echo '<p>' .$fila["caracteristicas"] .'</p>';
                    echo '</div>';
                    echo '<div class="col-md-4">';
                    echo '<img src= " '.$fila["imagen"] .'" class="img-fluid" />';
                    echo '</div>';
                    echo '</div>';



               }


            ?>
              

            </div>


        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
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
                                <a class="nav-link" href="silloncapri.php?silloncapri">sillon capri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="productos.php?idProducto=2">Mesa ipanema</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="productos.php?idProducto=3">Banco venecia</a>
                            </li>

                            </ul> 

                     <?php 
                    include ("config.php");

                    $conexion = mysqli_connect (HOST, USER, PASS, BD);

                    if (!$conexion){
                        die ('error de conexion con la base de datos');     
                    }

                    $consulta = 'SELECT * FROM productos WHERE idproducto = 1';
                    $resultado = mysqli_query($conexion, $consulta);
                    $filas = mysqli_fetch_all ($resultado, MYSQLI_ASSOC);


                    foreach ($filas as $fila) {
                        echo '<div class="row my-5 border border-dark rounded">';
                        echo '<div class="col-md-8">';
                        echo '<h3>' .$fila["nombre_producto"] .'</3>';
                        echo '<h4>' .$fila["caracteristicas"] .'</4>';
                        echo '</div>';
                        echo '<div class="col-md-4">';
                        echo '<img src= " '.$fila["imagen"] .'" class= "img-fluid" />';
                        
                    }
                    ?>



                 

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
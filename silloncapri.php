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
    echo '<div class="row my-1 border border-dark rounded">';
    echo '<div class="col-md-8">';
    echo '<h3>' .$fila["nombre_producto"] .'</3>';
    echo '<h4>' .$fila["caracteristicas"] .'</4>';
    echo '</div>';
    echo '<div class="col-md-4">';
    echo '<img src= " '.$fila["imagen"] .'" class= "img-fluid" />';
    





}


?>
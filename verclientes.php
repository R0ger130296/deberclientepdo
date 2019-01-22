<?php 
require_once "modelo/conexion.php";
require_once "modelo/Base.php";
require_once "controlador/cargar.php";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VER CLIENTES</title>
</head>
<body>
    <h1>LISTA DE CLIENTES</h1>
    <?php cargar(); ?>
    <?php  echo "<a href= 'index.html'>Regresar</a>";?>


</body>
</html>
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
    
</head>
<body>

    <h1>LISTA DE CLIENTES</h1>
    <?php 
    if(isset($_GET['buscar'])){
        Buscar($_GET['buscar']);
    }else{
    cargar();
}
    ?>
    <form method="get">

<input type="text" name="buscar" placeholder="Buscar Cliente">
<input type="submit" value="Buscar">

</form>
    <?php  echo "<a href= 'index.html'>Regresar</a>";?>


</body>
</html>
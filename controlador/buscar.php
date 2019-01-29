<?php
    require_once('../modelo/monexion.php');
    require_once('../modelo/base.php');

    if(isset($_GET['nombre'])){
        $nombre = $_GET['nombre'];
        $buscar = new Base();
        $mensaje = $buscar->buscarCliente($nombre);
    
        echo $mensaje;
        echo"<div><br><a href= '../verclientes.php'>Regresar</a></div>";
    }
?>
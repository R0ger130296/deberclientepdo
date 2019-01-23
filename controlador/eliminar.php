<?php
require_once('../modelo/conexion.php');
require_once('../modelo/Base.php');

if(isset($_GET['id'])){
$id=$_GET['id'];
$consultas=new Base();
$mensaje=$consultas->eliminar($id);
echo $mensaje;
echo "<div><br><a href = '../verclientes.php'>Regresar</a></div>";
}
?>
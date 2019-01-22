<?php 
require_once('../modelo/conexion.php');
require_once('../modelo/Base.php');
$mensaje = null;
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
if(strlen($nombre)>0 && strlen($apellido)>0 && strlen($cedula)>0 )
{
    $consulta = new Base();
    $mensaje  = $consulta->insertar($nombre,$apellido,$cedula);
    echo "<a href= '../index.html'>Regresar</a>";
}else{
    echo "Porfavor ingrese los datos";
}
echo $mensaje;
?>
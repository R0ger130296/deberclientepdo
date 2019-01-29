<?php 
function cargar(){
    $consulta = new Base();
    $filas = $consulta->consultar();
    echo "<table border=1 bordercolor=skyblue> 
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>CEDULA</th>";
foreach($filas as $fila){
    echo"<tr>";
    echo "<td>".$fila['id']."</td>";    
    echo "<td>".$fila['nombre']."</td>";    
    echo "<td>".$fila['apellido']."</td>";    
    echo "<td>".$fila['cedula']."</td>";      
    echo"<td><a href='controlador/eliminar.php?id=".$fila['id']."'>eliminar</td>";
    echo"</tr>";
}
   echo "</table>";
}
function Buscar($nombre){
    $consulta = new Base();
    $filas = $consulta->buscarCliente($nombre);
    echo "<table border=1 bordercolor=skyblue> 
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>CEDULA</th>";
        if(isset($filas)){
foreach($filas as $fila){
    echo"<tr>";
    echo "<td>".$fila['id']."</td>";    
    echo "<td>".$fila['nombre']."</td>";    
    echo "<td>".$fila['apellido']."</td>";    
    echo "<td>".$fila['cedula']."</td>";      
    echo"<td><a href='controlador/eliminar.php?id=".$fila['id']."'>eliminar</td>";
    echo"<td><a href='controlador/modificar.php?id=".$fila['id']."'>Modificar</td>";
    echo"</tr>";
}
   echo "</table>";
}
}
?>
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
    echo"</tr>";
}
   echo "</table>";
}
?>
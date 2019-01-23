<?php
class Base {
    public function insertar($nombre,$apellido,$cedula){
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "insert into cliente(nombre, apellido,cedula) 
        values (:nombre, :apellido, :cedula)";
        $statement = $conexion->prepare($sql);
        $statement -> bindParam(':nombre',$nombre);
        $statement -> bindParam(':apellido',$apellido);
        $statement -> bindParam(':cedula',$cedula);
        if(!$statement){
            return "Error  no se puede realizar la carga";
        }
        else{
            $statement->execute();
            return "la insercion se realizo con exito";
        }
    }

    public function consultar(){
        $array = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from cliente";
        $statement =$conexion->prepare($sql);
        $statement->execute();
        while($resultado = $statement->fetch()){
            $array[]=$resultado;
        }
        return $array;
    } 

    public function eliminar($id){
        $modelo= new Conexion();
        $conexion=$modelo->get_conexion();
        $sql="delete from cliente where id=:id";
        $statement=$conexion->prepare($sql);
        $statement->bindParam(':id',$id);
        if(!$statement){
            return "No se puede borrar";
        }else{
            $statement->execute();
            return "El registro fue eliminado con exito";
        }
    }
}
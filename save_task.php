<?php
include("db.php");
if(isset($_POST['save_task'])){
    $titulo=$_POST['titulo'];
    $descripcion=$_POST['descripcion'];
    $query= "INSERT INTO task(titulo,descripcion) VALUES ('$titulo','$descripcion')";
   $resultado= mysqli_query($conexion,$query);
   if(!$resultado){
       die("Query fallida");
   }
   $_SESSION['mensaje']= "Tarea guardada correctamente";
   $_SESSION['mensaje-tipo']="success";
   header("Location: index.php");
}
?>
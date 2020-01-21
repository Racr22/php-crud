<?php
    include("db.php");
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="DELETE FROM task where id='$id'";
        $resultado=mysqli_query($conexion,$query);
        if(!$resultado){
            die("Query fallida");
        }
        $_SESSION['mensaje']="Tarea eliminada satisfactoriamente";
        $_SESSION['mensaje-tipo']='danger';
        header("Location: index.php");
    }
?>
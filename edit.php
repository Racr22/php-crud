<?php
    include("db.php");
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $query="SELECT * FROM task where id='$id'";
        $resultado=mysqli_query($conexion,$query);
        if(mysqli_num_rows($resultado)==1){
            $row=mysqli_fetch_array($resultado);
            $titulo=$row['titulo'];
            $descripcion=$row['descripcion'];
        }
    }
    if(isset($_POST['actualizar'])){
        $id= $_GET['id'];
        $nuevotitulo=$_POST['titulo'];
        $nuevadescrip=$_POST['descripcion'];
        $query= "UPDATE task set titulo='$nuevotitulo',descripcion='$nuevadescrip' WHERE id='$id'";
        mysqli_query($conexion,$query);
        $_SESSION['mensaje']="Tarea actualizada correctamente";
        $_SESSION['mensaje-tipo']="info"; 
        header("Location: index.php");
    }
?>
<?php include("includes/header.php") ?>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="titulo" value="<?php echo $titulo;?>"class="form-control" placeholder="Actualiza el titulo">
                        </div>
                        <div class="form-group">
                        <textarea name="descripcion" rows="2"><?php echo $descripcion;?></textarea>
                        </div>
                        <button class="btn btn-success" name="actualizar">
                            Actualizar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include("includes/footer.php")?>
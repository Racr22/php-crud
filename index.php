<?php
include("db.php");?>
<?php include("includes/header.php")?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <?php if(isset($_SESSION['mensaje'])){?>
                <div class="alert alert-<?=$_SESSION['mensaje-tipo']?> alert-dismissible fade show" role="alert">
                <?=$_SESSION['mensaje']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
        </button>
        </div>
            <?php session_unset();} ?>
            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                    <input type="text" name="titulo" class="form-control"
                    placeholder="Titulo de Tarea" autofocus>
                    </div>
                    <div class="form-group">
                    <textarea name="descripcion" rows="2" class="form-control"
                    placeholder="Ingrese Descripcion"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Guardar Tarea">
                </form>
            </div>
        
        </div>
       
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Fecha de Creacion</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    $query= "SELECT * From task";
                    $resultado=mysqli_query($conexion,$query);
                    while($row=mysqli_fetch_array($resultado)){?>
                        <tr>
                            <td><?php echo $row['titulo']?></td>
                            <td><?php echo $row['descripcion']?></td>
                            <td><?php echo $row['fecha']?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                <i class="fas fa-edit"></i>
                                </a>
                                <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                   <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("includes/footer.php")?>    
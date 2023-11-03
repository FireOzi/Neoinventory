<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM producto";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Productos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="CSS/style-home.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
    </head>
    
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
          <img src="/inventario/img/inventario.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            NeoInventory</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/Inventario/home.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page"  href="#">Gestión de productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/inventario/CRUD-Proveedor/inventario.php">Gestión de proveedores</a>
              </li>
            </ul>
            <span class="navbar-text">
                <a class="nav-link" href="/inventario/index.html">Cerrar sesión</a>
            </span>
          </div>
        </div>
      </nav>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Nuevo producto</h1>
                                <form action="insertar.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="cod_producto" placeholder="cod_producto">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                    <input type="text" class="form-control mb-3" name="proveedor" placeholder="proveedor">
                                    <input type="text" class="form-control mb-3" name="cantidad" placeholder="cantidad">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio">
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-dark table-striped" >
                                    <tr>
                                    <th>cod_producto</th>
                                        <th>nombre</th>
                                        <th>proveedor</th>
                                        <th>cantidad</th>
                                        <th>precio</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                            <th><?php  echo $row['cod_producto']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['proveedor']?></th>
                                                <th><?php  echo $row['cantidad']?></th>
                                                <th><?php  echo $row['precio']?></th>       
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_producto'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_producto'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
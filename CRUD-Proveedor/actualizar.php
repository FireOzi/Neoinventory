<?php 
include("conexion.php");
$con=conectar(); //conexion a bd_bogota
$con2=conectar2(); //conexion a bd_medellin

//variables del formulario
$id=$_GET['id'];

//sentencia sql a ejecutar
$sql="SELECT * FROM proveedor WHERE cod_proveedor='$id'";

//ejecuta el query para buscar el proveedor con el id y lo guarda en la variable row
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    <input type="hidden" name="cod_proveedor" value="<?php echo $row['cod_proveedor']  ?>">
            
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="contacto" placeholder="contacto" value="<?php echo $row['contacto']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
    
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                            
                    </form>
                    
                </div>
    </body>
</html>
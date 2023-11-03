<?php
include("conexion.php");

$con=conectar(); //conexion a bd_bogota
$con2=conectar2(); //conexion a bd_medellin

//variables del formulario
$cod_producto=$_GET['id'];

//sentencia sql a ejecutar
$sql="DELETE FROM producto WHERE cod_producto='$cod_producto'";

//delete en la bd_bogota
$query=mysqli_query($con,$sql);
//delete en la bd_medellin
$query2=mysqli_query($con2,$sql);

//si ambos delete son correctos volver a inventario.php
    if($query and $query2){
        Header("Location: inventario.php");
    }
?>

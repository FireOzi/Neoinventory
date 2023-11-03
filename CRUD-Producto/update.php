<?php
include("conexion.php");

$con=conectar(); //conexion a bd_bogota
$con2=conectar2(); //conexion a bd_medellin

//variables del formulario
$cod_producto=$_POST['cod_producto'];
$nombre=$_POST['nombre'];
$proveedor=$_POST['proveedor'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];

//sentencia sql a ejecutar
$sql="UPDATE producto SET cod_producto=$cod_producto, nombre='$nombre', proveedor='$proveedor', cantidad='$cantidad', precio='$precio' WHERE cod_producto='$cod_producto'";

//update a bd_bogota
$query=mysqli_query($con,$sql);
//update a bd_medellin
$query2=mysqli_query($con2,$sql);

    if($query and $query2){
        Header("Location: inventario.php");
    }
?>
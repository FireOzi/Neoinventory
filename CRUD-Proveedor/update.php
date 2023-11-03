<?php
include("conexion.php");

$con=conectar(); //conexion a bd_bogota
$con2=conectar2(); //conexion a bd_medellin

//variables del formulario
$cod_proveedor=$_POST['cod_proveedor'];
$nombre=$_POST['nombre'];
$contacto=$_POST['contacto'];
$telefono=$_POST['telefono'];

//sentencia sql a ejecutar
$sql="UPDATE proveedor SET cod_proveedor=$cod_proveedor, nombre='$nombre', contacto='$contacto', telefono='$telefono' WHERE cod_proveedor='$cod_proveedor'";

//update a bd_bogota
$query=mysqli_query($con,$sql);
//update a bd_medellin
$query2=mysqli_query($con2,$sql);

    if($query and $query2){
        Header("Location: inventario.php");
    }
?>
<?php
//conexion a bd_bogota
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="bd_bogota";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}

//conexion a bd_medellin
function conectar2(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="bd_medellin";

    $con2=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con2,$bd);

    return $con2;
}
?>

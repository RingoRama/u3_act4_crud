<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$fecha_nac=$_POST['fecha_nac'];
$direccion=$_POST['direccion'];

$sql="UPDATE datos SET  nombre='$nombre',apellidos='$apellidos',correo='$correo',fecha_nac='$fecha_nac',direccion='$direccion' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>
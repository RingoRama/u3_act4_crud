<?php
include("conexion.php");
$con=conectar();

$id=$_POSTP['id'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$correo=$_POST['correo'];
$fecha_nac=$_POST['fecha_nac'];
$direccion=$_POST['direccion'];


$sql="INSERT INTO datos VALUES('$id','$nombre','$apellidos','$correo','$fecha_nac','$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>
<?php
include("conexion.php");
$con=conectar();

$correo=$_POST['correo'];
$password=$_POST['password'];
$nombre=$_POST['nombre'];
$documento=$_POST['documento'];

//$sql= "INSERT INTO `estudiante`(`correo`, `password`, `nombre`, `documento`) VALUES ('$correo','$password',$nombre', '$documento')";
$sql="INSERT INTO estudiante VALUES('$correo','$password','$nombre', '$documento','222')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: registrarse.php");

}else {
    Header("Location: listaEstudiantes.php");
}
?>
<?php
include 'conexion.php';
$titular=$_POST['titular'];
$numero=$_POST['numero'];
$validacion=$_POST['validacion'];
$codigo=$_POST['codigo'];

$consul="INSERT into targetas(titular,numero,validacion,codigo)
values('$titular','$numero' , '$validacion', '$codigo')";
$resultado=mysqli_query($conexion,$consul);
?>
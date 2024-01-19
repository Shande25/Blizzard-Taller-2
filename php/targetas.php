<?php
include 'conexion.php';
$titular=$_POST['titular'];
$numero=$_POST['numero'];
$validacion=$_POST['validacion'];
$codigo=$_POST['codigo'];
ç

$consulta="	INSERT into targetas(titular,numero,validacion,codigo)
values('$titular','$numero' , '$validacion', '$codigo')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
    echo "Registro Exitoso";
}else{
    echo"No se pudo registrar";
}
?>
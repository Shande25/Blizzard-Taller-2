<?php
include 'conexion.php';
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$contrasenia=$_POST['contrasenia'];


$consulta="	INSERT into registros(usuario,nombre,apellido,email,contrasenia)
values('$usuario','$nombre' , '$apellido', '$email','$contrasenia')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
    echo "Registro Exitoso";
}else{
    echo"No se pudo registrar";
}
?>
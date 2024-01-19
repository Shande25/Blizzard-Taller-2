<?php
include 'conexion.php';
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['correo_electronico'];
$contrasenia=$_POST['contrasenia'];


$consulta="	INSERT into registros(usuario,nombre,apellido,correo_electronico,contrasenia)
values('$usuario','$nombre' , '$apellido', '$correo_electronico','$contrasenia')";
$resultado=mysqli_query($conexion,$consulta);
if($resultado){
    echo "Registro Exitoso";
}else{
    echo"No se pudo registrar";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Registro</title>
	</head>
	<body>

<?php
include("conexion.php");
$conn=conn();

include("html/form_registro.html");

if(isset($_POST['enviar'])){
	$ci=$_POST['ci'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$passwd=$_POST['passwd'];
	$nacimiento=$_POST['nacimiento'];
	$nacionalidad=$_POST['nacionalidad'];

	if(verificacion($ci,$nombre,$apellido,$nacimiento,$nacionalidad,$passwd,$conn)){
	    registrar($ci,$nombre,$apellido,$nacimiento,$nacionalidad,$passwd,$conn);
        }	    
}

//esta funcion verifica que no este registrada la ci ingresada, que no este en uso. si no esta, se llamara a la funcion registrar
function verificacion($ci,$nombre,$apellido,$nacimiento,$nacionalidad,$passwd,$conn){
	$sql="select ci from usuarios where ci='$ci'";

	$r=mysqli_query($conn,$sql);
	if($r){
		$dato=mysqli_fetch_array($r);
		if(is_null($dato)){
			return true;
		}else{
			echo "ci en uso";
		}
	}else{
		echo "error de conexion";
	}
}

//esta funcion registra los datos del usuario una vez hecha la verificacion correctamente
function registrar($ci,$nombre,$apellido,$nacimiento,$nacionalidad,$passwd,$conn){
	$sql="insert into usuarios(ci,nombre,apellido,nacimiento,nacionalidad,passwd)values('$ci','$nombre','$apellido','$nacimiento','$nacionalidad','$passwd')";
	$r=mysqli_query($conn,$sql);

	if($r){
		header("Location: index.php");
		exit();
	}else{
		echo "error de conexion";
	}
}

?>

	</body>
</html>

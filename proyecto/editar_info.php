<?php
session_start();
$ci=$_SESSION['ci'];

include("conexion.php");
$conn=conn();
include("html/form_editar.html");

if(isset($_POST['enviar'])){
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$nacionalidad=$_POST['nacionalidad'];

	editar($ci,$nombre,$apellido,$nacionalidad,$conn);

}

function editar($ci,$nombre,$apellido,$nacionalidad,$conn){
	$sql="update usuarios set nombre='$nombre', apellido='$apellido', nacionalidad='$nacionalidad' where ci='$ci'";

	$r=mysqli_query($conn,$sql);

	if($r){
		$_SESSION['nombre']=$nombre;
		$_SESSION['apellido']=$apellido;
		$_SESSION['nacionalidad']=$nacionalidad;
		header("Location: perfil.php");
		exit();
	}else{
		echo "error";
	}

}

?>

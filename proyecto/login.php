<?php

if(isset($_POST['enviar'])){
	include('conexion.php');
	$conn=conn();
	$ci=$_POST['ci'];
	$passwd=$_POST['passwd'];
	
	$sql="select * from usuarios where ci='$ci'";
	$r=mysqli_query($conn,$sql);
	
	if($r){
		$datos=mysqli_fetch_array($r);
		if(is_array($datos)){
			if($passwd==$datos['passwd']){
				session_start();
				$_SESSION['nombre']=$datos['nombre'];
				$_SESSION['ci']=$datos['ci'];
				$_SESSION['apellido']=$datos['apellido'];
				$_SESSION['nacionalidad']=$datos['nacionalidad'];
				header("Location: home.php");
				exit();
			}else{
				echo "contraseña incorrecta";
			}
		}else{
			?>  <script>window.alert("ci incorrecto");</script> <?php //muestra una ventana de alerta
		}
	}else{
		echo "error de conexion";
	}
}


?>

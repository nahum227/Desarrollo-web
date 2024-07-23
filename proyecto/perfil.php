<?php
session_start();
$nombre=$_SESSION['nombre'];
$apellido=$_SESSION['apellido'];
$nacionalidad=$_SESSION['nacionalidad'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Perfil</title>
	</head>
	<body>
		<header><h2>Perfil de usuario</h2><hr></header>

                <a href="actualizar_img.php">actualizar foto</a>
		

                <!-- contenedor del perfil -->
		<div class='perfil'>
<?php
$img_ruta="img/usuarios/".$nombre.".jpg";
if(file_exists($img_ruta)){
	echo "<img src=$img_ruta>";
}else{
	echo "<img src='img/usuarios/default.png'>";
}

include("info_personal.php");
?>
                         
		</div>
                <a href='home.php'>ir al home</a>
	</body>
</html>

<?php
session_start();
$nombre=$_SESSION['nombre'];
$apellido=$_SESSION['apellido'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>HOME</title>
	</head>
	<body>
		<header>
			<h2>Bienvenido a nuestro sitio web</h2>
			<img src='img/cukLogo.png'>
                        <p><?php echo $nombre." ".$apellido; ?> </p>
		</header>
		<hr>
<?php
include('html/menus/menu_home.html');
?>


	</body>
</html>

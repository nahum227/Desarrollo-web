<?php

if($_SESSION['imagen']){
	$ruta_img="img/usuarios/$nombre.jpg";
	echo "<img src=$ruta_img>";
}else{
	echo "<img src='img/usuarios/default.png'>";
}


?>

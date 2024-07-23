<?php 
session_start();
$nombre=$_SESSION['nombre'];
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="imagen">
    <input type="submit" name="enviar" value="guardar">
</form>

<?php

if(isset($_POST['enviar'])){
	$imagen=$_FILES['imagen'];
	if(move_uploaded_file($imagen['tmp_name'],"img/usuarios/".$nombre.".jpg")){
		header("Location: perfil.php");
		exit();
    }else{
        echo "error";
    }

}

?>



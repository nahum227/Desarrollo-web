<?php session_start();?>

<form method="post" enctype="multipart/form-data">  <!-- la propiedad enctype en corto es para trbajar con otras codificaciones como la de este archivo. en este formulario es para enviar la entrada tipo file-->
    <input type="file" name="imagen">
    <input type="submit" name="enviar" value="guardar">
</form>

<?php

if(isset($_POST['enviar'])){
    $imagen=$_FILES['imagen'];

    if(move_uploaded_file($imagen['tmp_name'],"imagenes/".$_SESSION['username'].".jpg")){
        header("Location: perfil.php");
        exit();
    }else{
        echo "error";  //si la carpeta de destino no existe pasa esto
    }

}

?>
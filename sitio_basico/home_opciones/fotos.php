<a href="../home.php">volver</a>
<hr>
<h2>imagenes</h2>
<?php session_start(); $username=$_SESSION['username'];?>

<?php
$carpeta="galeria/".$username."/";
$dir=opendir($carpeta); //se la carpeta

while($imagen = readdir($dir)){  //readdir() va leyendo la carpeta y guardando el nombre de los archivos en $imagen

    if($imagen != "." && $imagen != ".."){  //esta condicion es necesaria porque las primeras dos entradas de readdir son "." y ".."
        $ruta=$carpeta."/".$imagen;   //concatena la carpeta y el nombre de la imagen en $ruta para tener la ruta completa de la imagen
        echo "<img src=$ruta>";  
        echo "<br>";
    }
}
closedir($dir); //cerrar carpeta
?>

<hr>

<!--  AGREGAR NUEVA IMAGENE A LA CARPETA -->
<!-- este formulario toma una imagen y un nombre para esta -->
<form method="post" enctype="multipart/form-data">  <!-- la propiedad enctype en corto es para trbajar con otras codificaciones como la de este archivo. en este formulario es para enviar la entrada tipo file-->
    <input type="file" name="imagen" required>
    <br><br>
    <label for="nombre">nombre de imagen</label>
    <input type="text" id='nombre' name="nombre" required>
    <input type="submit" name="enviar" value="guardar">
</form>

<?php
if(isset($_POST['enviar'])){
    $imagen=$_FILES['imagen'];
    $nombre=$_POST['nombre'];

    //se agrega la imagen a la carpeta del usuario y con el nombre ingresado en el formulario
    if(move_uploaded_file($imagen['tmp_name'],"galeria/$username/".$nombre.".jpg")){
        header("Location: fotos.php");
        exit();
    }else{
        echo "error";  //si la ruta de destino no existe pasa esto
    }
}

?>

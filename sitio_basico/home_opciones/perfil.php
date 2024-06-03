<?php session_start(); ?>

<h2>Datos</h2>
<hr>

<?php
$username=$_SESSION['username'];
echo "<h2 style='color:orange'> $username </h2>";

//FOTO DE PERFIL
    $username=$_SESSION['username'];  //se obtiene el username 

    $img_ruta="imagenes/$username.jpg";  //esta variable contiene contienen un dato concatenado, esto para completar la ruta.
if(file_exists($img_ruta)){  //si el archivo existe, entonces...
    echo "<img src=$img_ruta>";  //se usa $img_ruta para indicar la ruta
}else{  //si no existe el archivo se usara la imagen por defecto
    echo "<img src='imagenes/default.jpg'>"; 
}
?>

<br>
<a href="insertar_img.php">Insertar imagen</a>

<br><br>
<p>Informacion</p>
<p>Nombre: <?php echo $_SESSION['first_name']; ?></p>
<p>Apellido: <?php echo $_SESSION['last_name']; ?></p>
<p>Nacimiento: <?php echo $_SESSION['nacimiento']; ?></p>
<p>Nacionalidad: <?php echo $_SESSION['nacionalidad']; ?></p>

<a href="../home.php">volver</a>
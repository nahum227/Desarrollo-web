<?php session_start(); ?>

<h2>Datos</h2>
<hr>

<?php 
//DATOS
$datos=file("../archivos/datos.txt");
$ok=false;  //esta variable nomas la hice para indicar cuando se hallaron los datos del usuario en el foreach

foreach($datos as $line){
    list($first_name, $last_name, $nacimiento, $pais) = explode(':', trim($line));
    if($first_name==$_SESSION['first_name']){
        $_SESSION['nacimiento']=$nacimiento;
        $_SESSION['pais']=$pais;
        $ok=true;
        break;
    }    
}




//FOTO DE PERFIL
    $img=$_SESSION['username'];  //se obtiene el username 

    $img_ruta="imagenes/".$img.".jpg";  //esta variable contiene contienen un dato concatenado, esto para completar la ruta.
if(file_exists($img_ruta)){  //si el archivo existe, entonces...
    echo "<img src=$img_ruta>";  //se usa $img_ruta para indicar la ruta
}else{  //si no existe el archivo se usara la imagen por defecto
    echo "<img src='imagenes/default.jpg'>"; 
}
    

?>


<!-- sin terminar -->
<br>
<a href="insertar_img.php">Insertar imagen</a>

<br><br><br>
<a href="editar_info.php">Editar informacion</a> <!-- opcion para editar la info-->

<?php 
if($ok){
?>
<p>Nombre: <?php echo $_SESSION['first_name'] ?></p>
<p>Apellido: <?php echo $_SESSION['last_name'] ?></p>
<p>Nacimiento: <?php echo $_SESSION['nacimiento'] ?></p>
<p>Pais: <?php echo $_SESSION['pais'] ?></p>

<?php } ?>

<a href="../home.php">volver</a>
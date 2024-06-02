<?php session_start();

$nom=$_SESSION['first_name'];
$ape=$_SESSION['last_name'];


// pude haber usado $_session, pero no pude usarla en el formulario porque las comillas lo complican, asi que pase sus datos a variable comunes y use esas
echo " 
<form method='post'>
    <input type='text' name='nombre' value='$nom'>
    <br>
    <input type='text' name='apellido' value='$ape'>
    <br>
    <input type='text' name='nacionalidad'>
    <br>
    <input type='text' name='pais'>
    <br>
    <input type='submit' name='enviar'>
</form>
";

// sin terminar
if(isset($_POST['enviar'])){
    $nom=$_POST['nombre'];
    $ape=$_POST['apellido'];
    

   /* if(move_uploaded_file($nom)){
        
    }
*/

    $_SESSION['first_name']=$nom;
    $_SESSION['last_name']=$ape;
   

    $file=file("../archivos/users.txt");

    /*
    //este foreach buscara la linea con la id del usuario para luego modificar su informacion 
    foreach($file as $line){

        list($id, $stored_user, $stored_pass, $first_name, $last_name)=explode(":",trim($line));


    }
*/
    header("Location: perfil.php");
    exit();
}

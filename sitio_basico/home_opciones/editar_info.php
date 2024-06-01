<?php session_start();

$nom=$_SESSION['first_name'];
$ape=$_SESSION['last_name'];
$nac=$_SESSION['nacimiento'];
$pais=$_SESSION['pais'];

// pude haber usado $_session, pero no pude usarla en el formulario porque las comillas lo complican, asi que pase sus datos a variable comunes y use esas
echo " 
<form method='post'>
    <input type='text' name='nombre' value='$nom'>
    <br>
    <input type='text' name='apellido' value='$ape'>
    <br>
    <input type='text' name='nacimiento' value='$nac'>
    <br>
    <input type='text' name='pais' value='$pais'>
    <br>
    <input type='submit' name='enviar'>
</form>
";

// sin terminar
if(isset($_POST['enviar'])){
    $nom=$_POST['nombre'];
    $ape=$_POST['apellido'];
    $nac=$_POST['nacimiento'];
    $pais=$_POST['pais'];

   /* if(move_uploaded_file($nom)){
        
    }
*/

    $_SESSION['first_name']=$nom;
    $_SESSION['last_name']=$ape;
    $_SESSION['nacimiento']=$nac;
    $_SESSION['pais']=$pais;
    header("Location: perfil.php");
    exit();
}

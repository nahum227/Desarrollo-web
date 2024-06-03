<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$file = file('archivos/users.txt');
$authenticated = false;

foreach ($file as $line) {
    list($id, $stored_user, $stored_pass, $first_name, $last_name, $nacimiento, $nacionalidad, $deportista) = explode(':', trim($line));
    if ($username === $stored_user && $password === $stored_pass) {
        $_SESSION['user_id']=$id;
        $_SESSION['username'] = $username;
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['nacimiento']=$nacimiento;
        $_SESSION['nacionalidad']=$nacionalidad;
        $_SESSION['deportista']=$deportista;
        $authenticated = true;
        break;
    }
}

if ($authenticated) {
    header('Location: home.php');
    exit();
} else {
    //echo "Usuario o contraseña incorrectos.";
    header("Location: index.php");
    exit();
}
?>
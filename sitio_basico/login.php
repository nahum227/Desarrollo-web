<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$file = file('archivos/users.txt');
$authenticated = false;

foreach ($file as $line) {
    list($stored_user, $stored_pass, $first_name, $last_name) = explode(':', trim($line));
    if ($username === $stored_user && $password === $stored_pass) {
        $_SESSION['username'] = $username;
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $authenticated = true;
        break;
    }
}

if ($authenticated) {
    header('Location: home.php');
    exit();
} else {//?username=carlos&password=1234
    echo "Usuario o contraseña incorrectos.";
}
?>
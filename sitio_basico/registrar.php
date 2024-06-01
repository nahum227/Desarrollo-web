<?php
session_start();

//estas datos que se toman de $_SESSION son los que fueron ingresado en verificacion.php
$username=$_SESSION['username'];
$password=$_SESSION['password'];
$nombre=$_SESSION['first_name'];
$apellido=$_SESSION['last_name'];


$lista=file("archivos/users.txt");

$nueva_id=asignar_id($lista);  
//se guarda el valor retornado de la funcion asignar_id() en $nueva_id


//todos los datos para ser registrados se pasan por parametros incluyendo la nueva id
registrar_user($nueva_id,$username,$password,$nombre,$apellido);  //esta funcion registra al usuario en el archivo



//FUNCIONES
function registrar_user($id , $username , $password, $nombre, $apellido){
    $file=fopen("archivos/users.txt","a");  //se abre el arhcivo users.txt con la opcion para escritura que no sobreescriba nada 

    $datos=$id.":".$username.":".$password.":".$nombre.":".$apellido; //se concatenan todos los datos(el nuevo registro)
    fwrite($file, PHP_EOL.$datos); //se ingresan los datos en el archivo. PHP_EOL hace el salto de linea para no escribir en la ultima linea sino en una nueva
    fclose($file); 

    //al final redirecciona al index.php y como $_SESSION['username] fue recientemente setiado lleva al home.php de la nueva cuenta
    header("Location: index.php");
    exit();
}


//esta funcion retorna una nueva id
function asignar_id($file){ 
    $num=0; //esta variable sirve para guardar el numero de filas

           
    foreach($file as $file){  //esto ira contando cada fila de 1 en 1, al final del bucle se tendra el numero total de filas

        list($id, $username, $password, $firstname, $last_name) = explode(":", trim($file));

        $num+=1;  
    }          

    $num=$num+1; 
    return $num;

    /*EXPLICACION DE LA FUNCION
    ejemplo:
    Hay 4 registros, entonces hay 1 id de usuario por cada fila en el archivo(1,2,3,4)
    Al finalizar el bucle $num nos dara el numero total de filas
    osea $num=4
    Al terminar el bucle a $num se le suma 1 y queda $num=5, entonces ya hay una nueva id sin usar que a la vez sigue la serie de las id (1,2,3,4,5...)
    Por ultimo $num se retorna con el nuevo valor que sera la nueva id de usuario


    luego voy a mejorar los comentarios :)
    */
}


?>
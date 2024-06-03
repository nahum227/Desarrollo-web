<?php


if(isset($_POST['enviar'])){
        
       //se toman los datos del formulario
       $username=$_POST['username'];
       $password=$_POST['password'];
       $nombre=$_POST['nombre'];
       $apellido=$_POST['apellido'];
       $nacimiento=$_POST['nacimiento'];
       $nacionalidad=$_POST['nacionalidad'];
       

       //no use valor booleano sino un string, porque los valores booleanos en php al mostrarlos en pantalla o escribirlos se muestran 1 si es true y indefinido si es false.
       $deportista="false";

       if(isset($_POST['deportista'])){
        $deportista="true";
       }else{
        $deportista="false";
       }

       //se pasan los datos a la funcion
       verificar_datos($username,$password,$nombre,$apellido, $nacimiento, $nacionalidad, $deportista);
       
}

//funcion para verificar si el username ingresado ya esta registrado en el archivo users.txt
        function verificar_datos($username_ing, $password_ing, $nombre_ing, $apellido_ing, $nacimiento_ing, $nacionalidad_ing, $deportista_ing){  
                
                
                $datos=file("archivos/users.txt");

                foreach($datos as $dato){
                        
                        list($id, $stored_user, $stored_pass, $first_name, $last_name, $nacimeinto, $nacionalidad, $deportista) = explode(":", $dato);  

                        if($username_ing === $stored_user){ //si el username ingresado es al username del archivo, entonces...
                                header("Location: registrarse.php");
                                exit();
                        }
 
                }


                //USERNAME VERIFICADO
                //esta parte solo se ejecutara si el bucle finaliza sin haber encontrado ninguna coincidencia en el username ingresado con los username en user.txt
                session_start();  //se abre la sesion y se guardan los datos en $_SESSION 
                $_SESSION['username']=$username_ing;
                $_SESSION['password']=$password_ing;
                $_SESSION['first_name']=$nombre_ing;
                $_SESSION['last_name']=$apellido_ing;
                $_SESSION['nacimiento']=$nacimiento_ing;
                $_SESSION['nacionalidad']=$nacionalidad_ing;
                $_SESSION['deportista']=$deportista_ing;
                

                header("Location: registrar.php");  //se redirecciona a registrar.php. ahi se tomaran los datos de la session recien guardados en $_SESSION para ser registrados en users.txt
                exit();
        }

?>

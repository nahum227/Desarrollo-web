<?php


if(isset($_POST['enviar'])){
        
       //se toman los datos del formulario
       $username=$_POST['username'];
       $password=$_POST['password'];
       $nombre=$_POST['nombre'];
       $apellido=$_POST['apellido'];

       //se pasan los datos a la funcion
       verificar_datos($username,$password,$nombre,$apellido);
       
}

//funcion para verificar si el username ingresado ya esta registrado en el archivo users.txt
        function verificar_datos($username_ing, $password_ing, $nombre_ing, $apellido_ing){  
                
                
                $datos=file("archivos/users.txt");

                foreach($datos as $dato){
                        
                        list($id, $stored_user, $stored_pass, $first_name, $last_name) = explode(":", $dato);  

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

                header("Location: registrar.php");  //se redirecciona a registrar.php. ahi se tomaran los datos de la session recien guardados en $_SESSION para ser registrados en users.txt
                exit();
        }

?>

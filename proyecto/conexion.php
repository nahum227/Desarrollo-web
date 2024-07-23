<?php

function conn(){
	try{
		$conn=mysqli_connect('localhost','root','','confederacion'); 
		return $conn; //retorna la conexion
	}catch(Exception $e){ //en caso de que ocurra un error de conexion(base inexistente, servidor caido o cualquier otro error)
		echo "error de conexion";
	}
}

?>

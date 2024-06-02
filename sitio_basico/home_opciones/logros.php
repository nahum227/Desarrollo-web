<h2>Logros</h2>
<hr>

<ul>
<?php

session_start();

$ruta_archivo="../archivos/logros/logros".$_SESSION['user_id'].".txt";

$file=fopen($ruta_archivo,"r");

while(!feof($file)){
    echo fgets($file);
    echo "<br>";
}

fclose($file);
/*
fread($file, filesize( "" ))
*/

?>
</ul>
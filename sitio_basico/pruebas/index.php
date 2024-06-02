<form method="post">
    <input type="checkbox" name="premium">
    <br>
    <input type="submit" name="enviar">
</form>

<?php

if(isset($_POST['enviar'])){

    if(isset($_POST['premium'])){
        echo "eres premium";
    }else{
        echo "no eres premium";
    }


}


?>
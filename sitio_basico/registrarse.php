<h2>REGISTRO DE USUARIO</h2>
<hr>

<form method="POST" action="verificacion.php">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">
        <br>
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido">
        <br>
        <button type="submit" name="enviar">Registrarse</button>
</form>

<a href="index.php">Volver al login</a>


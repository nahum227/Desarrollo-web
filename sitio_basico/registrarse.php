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
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido" required>
        <br>
        <label for='nacimiento'>nacimiento</label>
        <input type="date" name="nacimiento" id="nacimiento" required>
        <br>
        <label for='nacionalidad'>Nacionalidad</label>
        <select name="nacionalidad" id='nacionalidad' required>
                <option value="">Selecciona</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Argentina">Argentina</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Brasil">Brasil</option>
                <option value="Chile">Chile</option>
                <option value="Colombia">Colombia</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="cuba">Cuba</option>
                <option value="ecuador">Ecuador</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Honduras">Honduras</option>
                <option value="Mexico">Mexico</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Panama">Panama</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Perú">Perú</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Republica Dominicana">Republica Dominicana</option>
                <option value="Venezuela">Venezuela</option>
        </select>
        <br>
        <br>
        <label for='deportista'>¿deportista?</label>
        <br>
        <label>si</label>
        <input type="checkbox" id='deportista' name="deportista">
        <br>
        <button type="submit" name="enviar">Registrarse</button>
</form>

<a href="index.php">Volver al login</a>


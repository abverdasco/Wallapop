
    <form action="<?php echo base_url() ?>usuarios/validar" method="post" enctype="multipart/form-data">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" require/><br>
        <label for="contra">Contraseña</label>
        <input type="password" name="contra" require/><br>
        <input type="submit" value="Enviar">
        <p id="mensaje-error" style="color: red;"></p>
    </form><br>
    <a href="<?php echo base_url() ?>usuarios/registro">¿Aún no tienes cuenta? ¡Regístrate!</a>
</body>
</html>
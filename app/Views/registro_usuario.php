    <?php 
        if(isset($usuRegistrado)) {
            echo 'Usuario registrado correctamente.';
            echo '<a href="'.base_url().'">Volver</a>';
        } else { ?>
            <form action="<?php echo base_url() ?>usuarios/guardar" method="post" enctype="multipart/form-data">
                <label for="nombreCompleto">Nombre Completo</label>
                <input type="text" name="nombreCompleto" require/><br>
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" require/><br>
                <label for="contra">Contraseña</label>
                <input type="password" name="contra" require/><br>
                <input type="submit" value="Enviar">
            </form> <?php
        }
    ?>
</body>
</html>
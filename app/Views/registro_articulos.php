    <?php 
        if(isset($datosGuardados)) {
            echo 'Los datos se han guardado correctamente.';
            echo '<a href="'.base_url().'">Volver</a>';
        } else { ?>
            <form action="<?php echo base_url() ?>articulos/guardar" method="post" enctype="multipart/form-data">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" require/><br>
                <label for="marca">Marca</label>
                <input type="text" name="marca" require/><br>
                <label for="precio">Precio</label>
                <input type="text" name="precio" require/><br>
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" require/><br>
                <input type="submit" value="Enviar" />
            </form> <?php 
        }
    ?>
</body>
</html>
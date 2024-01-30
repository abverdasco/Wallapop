


</body>
<script>
    function regresarInicio() {
        window.location.href='<?php echo base_url() ?>';
    }

    window.onload = function() {
        <?php
        $session = session();
        if($session->get('contra-error') == true) {
            echo 'document.getElementById("mensaje-error").innerHTML = "La contraseña es incorrecta";';
            $session->set('contra-error', false);
        } elseif($session->get('usuario-error') == true) {
            echo 'document.getElementById("mensaje-error").innerHTML = "El usuario no existe";';
            $session->set('usuario-error', false);
        }
        ?>
    }
</script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo AJAX</title>
    <script src="<?php echo base_url() ?>scripts/jquery.js"></script>
</head>
<body>
    <button onclick="mostrarSaludo()">Mostrar saludo</button>
    <div id="principal"></div>

    <script>
        function mostrarSaludo() {
            $(document).ready(function(){
                $.ajax({
                    url: '<?php echo base_url(); ?>articulos/pruebaAjax',
                    success: function(respuesta){
                        $()
                    }
                });
            });
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artículo</title>
</head>
<body>
    <h1 style="margin-top: 3%; margin-left: 3%;" class="color-base">Artículos <b>disponibles:</b></h1>
    <div class="contenedor-art">
        <?php 
            // var_dump($articulos);
            for ($indice=0; $indice < count($articulos); $indice++) { 

                $rutaImg = base_url("imagenes/".$articulos[$indice]['imagen1']);
                echo '
                    <div class="articulo">
                        <img src="'.$rutaImg.'" /><br>
                        <h3 class="titulo-art color-secun"><b>'.$articulos[$indice]['nombre'].'</b></h3>
                        <h4 class="marca-art color-base">'.$articulos[$indice]['marca'].'</h4>
                        <h5 class="precio-art color-base">'.$articulos[$indice]['precio'].'€</h5>
                    </div>
                ';
            }
        ?>
    </div>
</body>
</html>
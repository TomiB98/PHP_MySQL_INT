<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Programador web con PHP y MySQL</title>
    <link href="estilos.css" rel="stylesheet" />
</head>

<body>
    <section id="contenedor">

        <?php
        include('componentes/header.php')
        ?>

        <section id="contenido">
            <h2>Noticias - Unidad VI</h2>

            <div class="contVI">

                <h3 class="titulo">NOTICIAS!</h3>

                <div class="ordenNoticias">
                    <?php
                    //> Arrays Indexados <
                    // $noticias = array(
                    //     array('Cuál es el origen de la crisis mundial de microchips y cómo puede afectarte', 'Los fabricantes de autos y las compañías de dispositivos electrónicos enfrentan problemas para abastecerse de chips de computadora.'),
                    //     array('Transistores inversos', 'Qué son, para qué sirven y por qué aspiran a reinventar. La electrónicaLos trancitores nos prometen circuitos integrados más sencillos, rápidos, compactos y con un consumo inferior, por lo que podrían ayudarnos a dilatar aún más la «Ley de Moore>'),
                    //     array('El país que está luchando contra la cultura de tirar todo lo viejo a la basura', 'Una combinación de aficionados entusiastas, cafés de reparación y nuevas leyes que protegen el derecho a reparar podría ayudar a disminuir las crecientes montañas de aparatos electrónicos averiados'),
                    //     array('Qué es el litio geotérmico y por qué puede revolucionar las energías limpias', 'Un novedoso sistema para extraer litio ha resultado ser más respetuoso con el medio ambiente que otras formas más intensivas en agua o tierra como son las de Latinoamérica. ¿Ha llegado una nueva fiebre del oro?')
                    // );

                    //> Arrays Asociativos <
                    $noticias = array(
                        array('Imagen' => 'imagen2.jpg', 'Titulo' => 'Transistores inversos', 'TextoBreve' => 'Qué son, para qué sirven y por qué aspiran a reinventar. La electrónicaLos "trancitores" nos prometen circuitos integrados más sencillos, rápidos, compactos y con un consumo inferior, por lo que podrían ayudarnos a dilatar aún más la «Ley de Moore»'),
                        array('Imagen' => 'microchips.jpg', 'Titulo' => 'Cuál es el origen de la crisis mundial de microchips y cómo puede afectarte', 'TextoBreve' => 'Los fabricantes de autos y las compañías de dispositivos electrónicos enfrentan problemas para abastecerse de chips de computadora.'),
                        array('Imagen' => 'cellphone.jpg', 'Titulo' => 'El país que está luchando contra la cultura de tirar todo lo viejo a la basura', 'TextoBreve' => 'Una combinación de aficionados entusiastas, cafés de reparación y nuevas leyes que protegen el "derecho a reparar" podría ayudar a disminuir las crecientes montañas de aparatos electrónicos averiados'),
                        array('Imagen' => 'paisaje.jpg', 'Titulo' => 'Qué es el litio geotérmico y por qué puede revolucionar las energías limpias', 'TextoBreve' => 'Un novedoso sistema para extraer litio ha resultado ser más respetuoso con el medio ambiente que otras formas más intensivas en agua o tierra como son las de Latinoamérica. ¿Ha llegado una nueva fiebre del oro?')
                    );

                    //> Bucle For < (Deberia sacarse el $i++ del final)
                    //for ($i = 0; $i < count($noticias); $i++) {

                    //> Bucle While <
                    $i = 0;
                    while ($i < count($noticias)) {
                    ?>

                        <div class="contenedorNoticias">
                            <img class="imagen" src="imagenes/<?php echo $noticias[$i]['Imagen']; ?>" alt="">
                            <h3 class="tituloNoticia"><?php echo $noticias[$i]['Titulo']; ?></h3>
                            <p><?php echo $noticias[$i]['TextoBreve']; ?></p>
                        </div>
                    <?php $i++;
                    } ?>
                </div>
            </div>

        </section>

        <?php
        include('componentes/footer.html')
        ?>
    </section>
</body>

</html>
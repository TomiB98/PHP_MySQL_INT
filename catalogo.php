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

            <h2>Catálogo - Unidad V</h2>

            <nav id="botonera_secundaria">
                <ul>
                    <li><a href="catalogo.php?tipo=SillónCapri">Sillón Capri</a></li>
                    <li><a href="catalogo.php?tipo=MesaIpanema">Mesa Ipanema</a></li>
                    <li><a href="catalogo.php?tipo=BancoVenecia">Banco Venecia</a></li>
                </ul>
            </nav>

            <!-- seleccion con switch -->
            <?php
            if (isset($_GET['tipo'])) {
                switch ($_GET['tipo']) {
                    case 'SillónCapri':
                        $producto = 'Sillón Capri';
                        $precio = '$ 345.00';
                        $características = 'Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
                        $imagen = 'sillon1.jpg';

                        break;

                    case 'MesaIpanema':
                        $producto = 'Mesa Ipanema';
                        $precio = '$ 500.00';
                        $características = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms  ';
                        $imagen = 'ipanema.jpg';

                        break;

                    case 'BancoVenecia':
                        $producto = 'Banco Venecia';
                        $precio = '$ 450.00 ';
                        $características = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.  ';
                        $imagen = 'venecia.jpg';

                        break;
                };
            ?>


                <!-- seleccion con if -->
                <?php
                // if (isset($_GET['tipo'])) {
                //     if ($_GET['tipo'] == 'SillónCapri') {
                //         $producto = 'Sillón Capri';
                //         $precio = '$ 345.00';
                //         $características = 'Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
                //         $imagen = 'sillon1.jpg';
                //     } else if ($_GET['tipo'] == 'MesaIpanema') {
                //         $producto = 'Mesa Ipanema';
                //         $precio = '$ 500.00';
                //         $características = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms  ';
                //         $imagen = 'ipanema.jpg';
                //     } else if ($_GET['tipo'] == 'BancoVenecia') {
                //         $producto = 'Banco Venecia';
                //         $precio = '$ 450.00 ';
                //         $características = 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.  ';
                //         $imagen = 'venecia.jpg';
                //     };
                ?>

                <div>
                    <h4>Producto: </h4>
                    <p><?php echo $producto; ?></p>
                    <h4>Precio: </h4>
                    <p><?php echo $precio; ?></p>
                    <h4>Características: </h4>
                    <p><?php echo  $características; ?></p>
                </div>
                <div>
                    <h4>Imagen:</h4>
                    <img src="imagenes/<?php echo $imagen; ?>" alt="">
                </div>

            <?php } else { ?>
                <h3>¡Seleccione un producto!</h3>
            <?php } ?>

        </section>

        <?php
        include('componentes/footer.html')
        ?>
    </section>
</body>

</html>
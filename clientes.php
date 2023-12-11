<?php session_start(); ?>
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
            <h2>Clientes - Unidad VII</h2>

            <?php
            if (isset($_SESSION['clientes'])) {
            ?>

                <?php
                include('contenido_clientes.php')
                ?>

            <?php } else { ?>
                <form action="componentes/validar_cliente.php" method="POST">
                    <input type="email" placeholder="Correo Electrónico" name="email">
                    <input type="text" placeholder="Contraseña" name="password">
                    <input type="submit" value="Ingresar">
                </form>
            <?php
                if (isset($_GET['error'])) {
                    echo '<h4>Los datos ingresados son incorrectos!</h4>';
                }
            } ?>

        </section>

        <?php
        include('componentes/footer.html')
        ?>
    </section>
</body>

</html>
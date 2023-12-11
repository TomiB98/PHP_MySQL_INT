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
            <h2>Contáctenos - Unidad VIII</h2>

            <form class="formCrear" action="componentes/enviar_consulta.php" method="POST">
                <input class="imputCrear" type="text" placeholder="Nombre" name="nombre" required maxlength="30">
                <input class="imputCrear" type="text" placeholder="Apellido" name="apellido" required maxlength="50">
                <input class="imputCrear" type="email" placeholder="Correo Electrónico" name="email" required maxlength="100">
                <textarea class="imputCrear" type="text" placeholder="Consulta" name="consulta" required></textarea>
                <input class="imputCrear" type="submit" value="Guardar">
            </form>

            <?php
            if(isset($_GET['ok_db'])) {
                echo '<p>Datos cargados correctamente!</p>';
            }
            ?>

        </section>

        <?php
        include('componentes/footer.html')
        ?>
    </section>
</body>

</html>
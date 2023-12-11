<header>
    <nav id="botonera_principal">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="noticias.php">Noticias</a></li>
            <li><a href="clientes.php">Clientes</a></li>
            <li><a href="contacto.php">Contáctenos</a></li>
            <?php
            if (isset($_SESSION['clientes'])) {
            ?>
            <li><a href="componentes/log_out.php">Salir</a></li>
            <?php } ?>
        </ul>
    </nav>
    <div id="marca">
        <h1>Programador web con PHP y MySQL</h1>
    </div>
</header>
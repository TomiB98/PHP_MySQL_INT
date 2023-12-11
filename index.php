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
            <h2>Unidad IV - Introducción a PHP</h2>
            <div id="uni4_1">
                <?php
                $nombre = 'Tomas';
                $ciudad = 'Salta';
                $edad = 25;

                echo '<h3>Hola mi nombre es ' . $nombre . '!</h3>';
                echo '<p>Soy de ' . $ciudad . '</p>';
                echo 'Tengo ' . $edad . ' años';
                ?>
            </div>
            <div id="uni4_2">
                <?php
                echo 'EVALUACIÓN' . '<br>' . 'INTEGRADORA' . '<br>' . 'PHP y MySQL';
                ?>
            </div>
            <div id="uni4_3">
                <?php
                $cadena_de_caracteres = 'Tomas';
                $entero = 25;
                $booleana = true;

                echo 'Cadena: ' . $cadena_de_caracteres . '<br>';
                echo 'Entero: ' . $entero . '<br>';
                echo 'Booleano: ' . $booleana . '<br>';
                ?>
            </div>
            <div id="uni4_4">
                <?php
                $dos = 2;
                $cuatro = 4;
                $suma = $dos + $cuatro;
                $multiplicacion = $dos * $cuatro;
                $division = $cuatro / $dos;

                // echo 'Variables: '. $dos. '-'. $cuatro. '-'. $suma. '-'. $multiplicacion. '-'. $division. '<br>';
                echo `Variables: . $dos. -. $cuatro. -. $suma. -. $multiplicacion. -. $division. <br>`;
                echo 'Operaciones y Resultados: ' . $dos . '+' . $cuatro . '=' . $suma . ' - ' . $dos . 'x' . $cuatro . '=' . $multiplicacion . ' - ' . $cuatro . '/' . $dos . '=' . $division;
                ?>
            </div>
        </section>

        <?php
        include('componentes/footer.html')
        ?>
    </section>
</body>

</html>
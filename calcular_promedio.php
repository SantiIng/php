<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Promedio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Resultado del Promedio</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $calificacion1 = $_POST["calificacion1"];
            $calificacion2 = $_POST["calificacion2"];
            $calificacion3 = $_POST["calificacion3"];

            $promedio = ($calificacion1 + $calificacion2 + $calificacion3) / 3;

            echo "<p>Calificación 1: $calificacion1</p>";
            echo "<p>Calificación 2: $calificacion2</p>";
            echo "<p>Calificación 3: $calificacion3</p>";
            echo "<p>Promedio: $promedio</p>";
        } else {
            echo "<p>No se han recibido datos.</p>";
        }
        ?>
    </div>
</body>
</html>

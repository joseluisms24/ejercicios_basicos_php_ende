<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Tiempo de Viaje</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $distancia = htmlspecialchars(trim($_POST['distancia']));
    $velocidad = htmlspecialchars(trim($_POST['velocidad']));

    if ($velocidad > 0) {
        $tiempo = $distancia / $velocidad;
        echo "<h2>El tiempo estimado de viaje es: " . number_format($tiempo, 2) . " horas.</h2>";
    } else {
        echo "<h2>La velocidad debe ser mayor que cero.</h2>";
    }
} else {
    echo "<h2>No se recibieron datos.</h2>";
}
?>

</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Día de la Semana</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y sanitizar el dato ingresado
    $numero = htmlspecialchars(trim($_POST['numero']));

    // Determinar el día de la semana correspondiente
    switch ($numero) {
        case 1:
            $dia = "Lunes";
            break;
        case 2:
            $dia = "Martes";
            break;
        case 3:
            $dia = "Miércoles";
            break;
        case 4:
            $dia = "Jueves";
            break;
        case 5:
            $dia = "Viernes";
            break;
        case 6:
            $dia = "Sábado";
            break;
        case 7:
            $dia = "Domingo";
            break;
        default:
            echo "<h2>Error: El número debe estar entre 1 y 7.</h2>";
            exit;
    }

    echo "<h2>El día correspondiente es: $dia</h2>";
} else {
    echo "<h2>No se recibieron datos.</h2>";
}
?>

</body>
</html>

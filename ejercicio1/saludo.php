<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $apellido = htmlspecialchars(trim($_POST['apellido']));

    echo "<h2>¡Hola $nombre $apellido!</h2>";
} else {
    echo "<h2>No se recibieron datos.</h2>";
}
?>

</body>
</html>

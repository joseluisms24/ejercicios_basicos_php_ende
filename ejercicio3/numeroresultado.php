<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Mayor de Tres Números</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y sanitizar los datos
    $numero1 = htmlspecialchars(trim($_POST['numero1']));
    $numero2 = htmlspecialchars(trim($_POST['numero2']));
    $numero3 = htmlspecialchars(trim($_POST['numero3']));

    // Determinar el mayor de los tres números
    $mayor = $numero1;

    if ($numero2 > $mayor) {
        $mayor = $numero2;
    }

    if ($numero3 > $mayor) {
        $mayor = $numero3;
    }

    echo "<h2>El mayor de los tres números es: $mayor</h2>";
} else {
    echo "<h2>No se recibieron datos.</h2>";
}
?>

</body>
</html>

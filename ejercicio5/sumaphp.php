<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Suma Acumulativa</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y sanitizar el dato ingresado
    $numero = htmlspecialchars(trim($_POST['numero']));

    // Validar que el número sea positivo
    if ($numero > 0) {
        // Calcular la suma acumulativa
        $suma = 0;
        for ($i = 1; $i <= $numero; $i++) {
            $suma += $i;
        }

        echo "<h2>La suma de los números desde 1 hasta $numero es: $suma</h2>";
    } else {
        echo "<h2>Error: Por favor ingrese un número mayor que cero.</h2>";
    }
} else {
    echo "<h2>No se recibieron datos.</h2>";
}
?>

</body>
</html>

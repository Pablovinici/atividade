<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Peso (kg): <input type="text" name="peso"><br>
    Altura (m): <input type="text" name="altura"><br>
    <input type="submit" value="Calcular IMC">
</form>

<?php

function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = isset($_POST['peso']) ? floatval($_POST['peso']) : null;
    $altura = isset($_POST['altura']) ? floatval($_POST['altura']) : null;

    if ($peso !== null && $altura !== null && $peso > 0 && $altura > 0) {
        $imc = calcularIMC($peso, $altura);
        echo "O seu IMC é: " . number_format($imc, 2) . "\n";

        if ($imc < 18.5) {
            echo "Abaixo do peso\n";
        } elseif ($imc < 25) {
            echo "Peso normal\n";
        } elseif ($imc < 30) {
            echo "Sobrepeso\n";
        } else {
            echo "Obesidade\n";
        }
    } else {
        echo "Por favor, insira valores válidos para peso e altura.\n";
    }
}
?>
</body>
</html>
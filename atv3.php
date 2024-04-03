<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Digite um número inteiro (negativo para terminar): <br>
    <input type="text" name="numeros[]"><br>
</form>

    
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $total = 0;
    $count = 0;


    $numeros = $_POST['numeros'];

    foreach ($numeros as $numero) {
        $numero = intval($numero);
        if ($numero < 0) {
            break;
        }
        $total += $numero; 
        $count++;
    }

    if ($count > 0) {
        $media = $total / $count;
        echo "A média dos valores positivos é: $media";
    } else {
        echo "Nenhum valor positivo foi inserido.";
    }
}
?>

</body>
</html>


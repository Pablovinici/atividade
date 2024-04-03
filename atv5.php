<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Digite o seu palpite (entre 1 e 100): <input type="text" name="palpite">
    <input type="submit" value="Enviar">
</form>

<?php


session_start();

function reiniciarJogo() {
    $_SESSION['num_aleatorio'] = rand(1, 100);
    $_SESSION['tentativas'] = 0;
}

if (!isset($_SESSION['num_aleatorio'])) {
    reiniciarJogo();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $palpite = isset($_POST['palpite']) ? intval($_POST['palpite']) : null;

    
    if ($palpite !== null) {
        $_SESSION['tentativas']++;

        
        if ($palpite === $_SESSION['num_aleatorio']) {
            echo "Parabéns! Você acertou o número {$_SESSION['num_aleatorio']} em {$_SESSION['tentativas']} tentativas.";
            reiniciarJogo(); 
        } elseif ($palpite < $_SESSION['num_aleatorio']) {
            echo "O número é maior que $palpite. Tente novamente!";
        } else {
            echo "O número é menor que $palpite. Tente novamente!";
        }
    } else {
        echo "Por favor, digite um número válido.";
    }
}
?>
</body>
</html>


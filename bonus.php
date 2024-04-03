<?php

function generateCow($mensagem) {
    $output = "";

    $mundo = explode(" ", $mensagem);
    $linha = "";
    foreach ($mundo as $mundo) {
        if (mb_strlen($linha . $mundo) > 37) {
            $output .= "| " . str_pad($linha, 37) . " |\n";
            $linha = "";
        }
        $linha .= $mundo . " ";
    }

    if (!empty($linha)) {
        $output .= "| " . str_pad($linha, 37) . " |\n";
    }

    $output .= " ----------------------------------------\n";
    $output .= "        \\   ^__^\n";
    $output .= "         \\  (oo)\\_______\n";
    $output .= "            (__)\\       )\\/\\\n";
    $output .= "                ||----w |\n";
    $output .= "                ||     ||\n";
    $output .= " ----------------------------------------\n";
    return $output;
}

echo "Olá meu nome é Bil! Boraaa Billl";
$mensagem = fgets(STDIN);
echo generateCow($mensagem);

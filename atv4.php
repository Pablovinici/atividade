<?php

function fibonacci($n)
{
    $fib = array(0, 1); 
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; a
    }
    return $fib;
}

$fibonacci_10 = fibonacci(10);
echo "Os 10 primeiros números da sequência de Fibonacci são: ";
foreach ($fibonacci_10 as $numero) {
    echo $numero . " ";
}

?>

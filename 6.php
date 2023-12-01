$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$soma = 0;

foreach ($matriz as $linha) {
    foreach ($linha as $elemento) {
        $soma += $elemento;
    }
}

echo "A soma dos elementos da matriz é: " . $soma;

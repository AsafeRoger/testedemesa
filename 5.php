$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

foreach ($matriz as $linha) {
    foreach ($linha as $elemento) {
        echo $elemento . ' ';
    }
    echo "\n";
}

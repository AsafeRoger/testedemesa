function removerCaractere(&$string, $caractere) {
    $ocorrencias = substr_count($string, $caractere);
    $string = str_replace($caractere, '', $string);
    return $ocorrencias;
}

// Exemplo de uso
$texto = "hello world";
$char = "l";
$ocorrencias = removerCaractere($texto, $char);

echo "Texto após remoção: $texto\n";
echo "Número de ocorrências removidas: $ocorrencias\n";

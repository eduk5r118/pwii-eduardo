<?php
// Entrada
echo "Digite o comprimento da caixa (em metros): ";
$comprimento = floatval(fgets(STDIN));

echo "Digite a largura da caixa (em metros): ";
$largura = floatval(fgets(STDIN));

echo "Digite a altura da caixa (em metros): ";
$altura = floatval(fgets(STDIN));

// Cálculo do volume
$volume = $comprimento * $largura * $altura;

// Saída
echo "O volume da caixa é: " . number_format($volume, 2) . " m³\n";
?>

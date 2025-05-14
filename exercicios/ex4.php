<?php
// Entrada
echo "Digite o valor do produto (em reais): ";
$valor_produto = floatval(fgets(STDIN));

// Cálculo do desconto
$desconto = $valor_produto * 0.10;
$valor_com_desconto = $valor_produto - $desconto;

// Saída
echo "Valor do produto com 10% de desconto: " . number_format($valor_com_desconto, 2) . " R$\n";
?>

<?php
// Entrada
echo "Digite o comprimento da base maior (em metros): ";
$base_maior = floatval(fgets(STDIN));

echo "Digite o comprimento da base menor (em metros): ";
$base_menor = floatval(fgets(STDIN));

echo "Digite a altura do trapézio (em metros): ";
$altura = floatval(fgets(STDIN));

// Cálculo da área
$area_trapezio = (($base_maior + $base_menor) * $altura) / 2;

// Saída
echo "A área do trapézio é: " . number_format($area_trapezio, 2) . " m²\n";
?>

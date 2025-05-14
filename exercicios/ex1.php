    <?php
    // Entrada
    echo "Digite a distância percorrida (em km): ";
    $distancia = floatval(fgets(STDIN));
    
    echo "Digite a quantidade de combustível consumida (em litros): ";
    $combustivel = floatval(fgets(STDIN));
    
    // Cálculo do consumo médio
    $consumo_medio = $distancia / $combustivel;
    
    // Saída
    echo "O consumo médio é: " . number_format($consumo_medio, 2) . " km/l\n";
    ?>

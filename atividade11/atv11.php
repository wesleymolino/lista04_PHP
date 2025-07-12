<?php
$vendas = $_POST['vendas'];
$total = 0;
$maior = 0;

for ($i = 0; $i < 7; $i++) {
    $total += $vendas[$i];

    if ($vendas[$i] > $maior) {
        $maior = $vendas[$i];
    }
}

$media = $total / 7;

echo "Total da semana: R$ " . number_format($total, 2, ',', '.') . "<br>";
echo "Média de vendas por dia: R$ " . number_format($media, 2, ',', '.') . "<br>";
echo "Maior valor de venda: R$ " . number_format($maior, 2, ',', '.') . "<br>";
?>

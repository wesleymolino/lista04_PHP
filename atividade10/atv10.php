<?php
$produtos = [
    "Notebook" => 3500.00,
    "Mouse" => 50.00,
    "Teclado" => 120.00,
    "Monitor" => 800.00,
    "Impressora" => 900.00
];

foreach ($produtos as $nome => $preco) {
    echo "$nome - R$ " . number_format($preco, 2, ',', '.') . "<br>";
}
?>

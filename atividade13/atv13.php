<?php
$salarios = [
    "Alice" => 2000,
    "Bruno" => 2500,
    "Clara" => 1800,
    "Daniel" => 3000,
    "Elisa" => 2200
];

foreach ($salarios as $nome => $salario) {
    $novo = $salario * 1.10;
    echo "$nome - Novo salário: R$ " . number_format($novo, 2, ',', '.') . "<br>";
}
?>

<?php
$valores = $_POST['valores'];
$produto = 1;
$i = 0;

while ($i < count($valores)) {
    $produto *= $valores[$i];
    $i++;
}

echo "A multiplicação acumulada dos 5 números é: $produto";
?>

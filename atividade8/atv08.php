<?php

$total = isset($_POST['total']) ? (int)$_POST['total'] : 0;
$contador = isset($_POST['contador']) ? (int)$_POST['contador'] : 0;
$soma = isset($_POST['soma']) ? (float)$_POST['soma'] : 0;


if (isset($_POST['nota'])) {
    $nota = (float)$_POST['nota'];
    $soma += $nota;
    $contador++;
}


do {
    if ($contador < $total) {
        echo "<h2>Digite a nota " . ($contador + 1) . " de $total</h2>";
        echo '
        <form action="atv08.php" method="post">
            <input type="number" name="nota" min="0" max="10" step="0.1" required>
            <input type="hidden" name="total" value="' . $total . '">
            <input type="hidden" name="contador" value="' . $contador . '">
            <input type="hidden" name="soma" value="' . $soma . '">
            <button type="submit">Enviar Nota</button>
        </form>
        ';
    } else {
        $media = $soma / $total;
        echo "<h2>Todas as notas foram digitadas!</h2>";
        echo "<p><strong>Média final: " . number_format($media, 2, ',', '.') . "</strong></p>";
    }
    break;
} while ($contador < $total);
?>

<?php

$palpite = isset($_POST['palpite']) ? (int)$_POST['palpite'] : 0;
$secreto = isset($_POST['secreto']) ? (int)$_POST['secreto'] : rand(1, 20); 
$tentativas = isset($_POST['tentativas']) ? (int)$_POST['tentativas'] : 1;

echo "<h2>Jogo da Adivinhação</h2>";

while ($palpite !== $secreto) {
    echo "<p>Você tentou: <strong>$palpite</strong></p>";

    if ($palpite < $secreto) {
        echo "<p>O número secreto é <strong>maior</strong>.</p>";
    } elseif ($palpite > $secreto) {
        echo "<p>O número secreto é <strong>menor</strong>.</p>";
    }

    echo '
    <form action="atv15.php" method="post">
        <label>Tente novamente:</label>
        <input type="number" name="palpite" min="1" max="20" required autofocus>
        <input type="hidden" name="secreto" value="' . $secreto . '">
        <input type="hidden" name="tentativas" value="' . ($tentativas + 1) . '">
        <button type="submit">Enviar</button>
    </form>
    <p>Tentativas até agora: ' . $tentativas . '</p>
    ';
    break; 
}


if ($palpite === $secreto) {
    echo "<p><strong>Parabéns! Você acertou o número $secreto.</strong></p>";
    echo "<p>Você tentou $tentativas vezes.</p>";
   
}
?>

<?php
$numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;
$soma = isset($_POST['soma']) ? (int)$_POST['soma'] : 0;
$numAnterior = $soma;
$soma += $numero;


while ($numero !== 0) {
    echo '
    <h2>Soma de Números</h2>
    <form action="atv07.php" method="post">
        <label>Digite um número (0 para sair):</label>
        <input type="number" name="numero" required autofocus>
        <input type="hidden" name="soma" value="' . $soma . '">
        <button type="submit">Enviar</button>
    </form>
    <p>' . $numAnterior . ' + ' . $numero . '</p>
    <p>Soma atual: ' . $soma . '</p>
    ';
    
    break;
}


if ($numero === 0) {
    echo "<h2>Você digitou 0</h2>";
    echo "<p><strong>Soma total: $soma</strong></p>";
    
}
?>

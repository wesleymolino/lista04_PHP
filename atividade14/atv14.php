<?php
do {
    if (isset($_POST['num'])) {
        $num = $_POST['num'];
        if ($num >= 1 && $num <= 10) {
            echo "Número válido: $num";
            break;
        } else {
            echo "Número fora da faixa. Tente novamente.";
            break;
        }
    }
} while (true);
?>

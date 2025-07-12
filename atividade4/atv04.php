<?php
$num = $_POST['num'];
$i = 1;
do {
    echo "$num x $i = " . ($num * $i) . "<br>";
    $i++;
} while ($i <= 10);
?>

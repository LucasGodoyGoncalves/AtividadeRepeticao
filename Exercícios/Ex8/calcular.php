<?php
$n = $_POST['numero'];


for ($i = 1; $i <= 10; $i++) {
    $r = $n * $i;

    echo "$n x $i = $r <br>";
}

?>
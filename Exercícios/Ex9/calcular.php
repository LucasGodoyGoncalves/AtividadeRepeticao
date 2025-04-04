<?php
$n = $_POST ['numero'];

$in = $_POST ['intervalo'];


for ($i = 0; $i <= $n; $i += $in) {
    echo "$i <br>";
}

?>
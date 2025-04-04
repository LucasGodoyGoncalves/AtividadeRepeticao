<?php
$n = $_POST ['numero'];

$in = $_POST ['intervalo'];


for ($i = $n; $i >= 0; $i -= $in) {
    echo "$i <br>";
}

?>
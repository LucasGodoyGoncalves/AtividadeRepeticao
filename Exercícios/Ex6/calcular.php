<?php
$n = $_POST['numero'];


for ($i = 0; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        echo "$i <br>";
    }
}

?>
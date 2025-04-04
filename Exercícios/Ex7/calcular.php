<?php
$n = $_POST['numero'];


for ($i = $n; $i >= 0; $i--) {
    if ($i % 2 == 0) {
        echo "$i <br>";
    }
}

?>
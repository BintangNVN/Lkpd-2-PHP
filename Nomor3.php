<?php
$bilangan = 90;

for ($i = 1; $i <= 18; $i++) {
    if ($bilangan % $i == 0) {
        $hasilBagi = $bilangan / $i;
        echo "$bilangan : $i = $hasilBagi<br>";
    }
}
?>
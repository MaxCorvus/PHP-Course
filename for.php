<?php
for ($a = 0; $a<=100; $a++) {
    echo $a . " ";
}
echo '<br>';
for ($b = 11; $b<=33; $b++) {
    echo $b . " ";
}
echo '<br>';
for ($c = 0; $c <=100; $c++) {
    if ($c % 2 == 0) {
        echo $c . " ";
    }
}
echo '<br>';
$res = 0;
for ($i = 0; $i <= 100; $i++) {
$res += $i;
}
echo $res;
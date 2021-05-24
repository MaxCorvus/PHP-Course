<?php
$i = 1;
while ($i <= 100) {
    echo $i++ . " ";
}
echo '<br>';
$a = 11;
while ($a <= 33) {
    echo $a++ . " ";
}
echo '<br>';
$b = 0;
while ($b++ <= 100) {
    
    if ($b % 2 == 0) {
        echo $b . " ";
    
    }
    
}
echo '<br>';
$c = 0;
$result = 0;
while (++$c <= 100) {
 $result += $c;
}
echo $result;
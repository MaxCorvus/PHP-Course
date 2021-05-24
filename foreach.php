<?php
$arr = ["html", "css", "php", "js", "jq"];
foreach ($arr as $val) {
    echo $val . '<br>';
}
$result = 0;
$arr1 = [1, 2, 3, 4, 5];
foreach ($arr1 as $val) {
$result += $val;
}
echo $result . '<br>';
$result1 = 0;
$arr2 = [1, 2, 3, 4, 5];
foreach ($arr2 as $val) {
    $result1 += ($val**2);
}
echo $result1;
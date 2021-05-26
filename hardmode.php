<?php

/*for ($i = 1; $i <= 100; $i++)
{
    $arr[$i] = $i;
}
var_dump ($arr); 
*/
$arr = [
    'green'=>'зеленый', 
    'red'=>'красный', 
    'blue'=>'голубой'
];

$en = [];
$ru = [];
foreach ($arr as $key => $value) {
    $en[] = $key;
    echo '<br>';
    $ru[] = $value;
}
//bb
var_dump ($en);
var_dump ($ru);
echo "<br>";
// $num = 1000;
// $count = 0;
// while ($num > 50) {
// $num = $num/2;
// $count++;
// }
// echo $count . "<br>" . $num;
$num = 1000;
for ($i = 0; $num > 50; $i++) {
    $num = $num/2;
}
echo $i . "<br>" . $num;

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
    'blue'=>'голубой'];
    foreach ($arr as $key => $value) {
        $en[$key] = $key;
        echo '<br>';
        $ru = [$value];
    }
    //bb
    var_dump ($en);
    var_dump ($ru);
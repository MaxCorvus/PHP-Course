<?php
$arr = [
'green'=>'зеленый',
'red'=>'красный',
'blue'=>'голубой'
];
foreach ($arr as $key => $value) {
    echo $key . ' - ' . $value . '<br>';
}
$arr1 = [
    'Коля'=> 200,
    'Вася'=> 300,
    'Петя'=> 400
    ];
    foreach ($arr1 as $key => $value) {
        echo $key . ' - зарплата ' . $value . "$" . '<br>';
    }
<?php

function test() {

}

function squaring($arg) {
    $arg = $arg ** 2;
    return $arg;
}
echo squaring (15) . "<br>";

function math($arg1, $arg2, $arg3) {
    $res = ($arg1 - $arg2) / $arg3;
    return $res;
}
echo math (226, 1, 1) . "<br>";

function DayOfWeek ($arg) {
    if ($arg > 0 && $arg < 8) {
     
    $day = ['Monday', 'Tuesday', 'Wednesday', 'Thursay', 'Friday', 'Saturday', 'Sunday'];
    echo $day[$arg-1];
    }
    else {
        echo "Неверное значение";
    }
}
DayOfWeek(8);
echo "<br>";
function isNumberInRange($arg) {
    if ($arg > 0 && $arg < 10) {
        return true;
    }
    else {
        return false;
    }

}
var_dump (isNumberInRange(225));

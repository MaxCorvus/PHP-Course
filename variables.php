<?php
/*
Напишите скрипт, который считает количество секунд в сутках. 
Вы должны использовать создать не менее 3х переменных.
*/
$seconds=60;
$minutes=60;
$hours=24;
$day=$seconds*$minutes*$hours;
echo "В сутках " . $day . " секунд";
echo '</br>';
/*
Создайте переменные $a=10 и $b=2. 
Выведите на экран их сумму, разность, произведение и частное (результат деления).
*/
$a=10;
$b=2;
echo " Сумма: " . $sum = $a+$b;
echo '</br>';
echo " Разность: " . $sum = $a-$b;
echo '</br>';
echo " Произведение: " . $sum = $a*$b;
echo '</br>';
echo " Частное: " . $sum = $a%$b;
echo '</br>';

/*
Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c. 
Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, 
а результат запишите в переменную $result. 
Выведите на экран значение переменной $result.
*/
$a=17;
$b=10;
$c = $a-$b;
$d = 7;
echo "Task 3: " . $result = $c+$d; 
echo '</br>';
/*
Переделайте приведенный код так, чтобы в нем использовались операции подобные +=. 
Количество строк кода и результат при этом не должны измениться. Код для переделки:
*/
$var = 1;
	$var += 12;
	$var -= 14;
	$var *= 5;
	$var /=  7;
	$var++;
	$var--;
	echo $var;

?>
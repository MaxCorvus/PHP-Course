<?php
class Employee {
    public $name, $age, $salary;
}
$Vanya = new Employee;
$Vanya -> name = "Vanya";
$Vanya -> age = 25;
$Vanya -> salary = 1000;

$Vasya = new Employee;
$Vasya -> name = "Vasya";
$Vasya -> age = 26;
$Vasya -> salary = 2000;

echo "Сумма возрастов = " . ($Vanya -> age) + ($Vasya -> age) . "<br>";
echo "Сумма зарплат = " . ($Vanya -> salary) + ($Vasya -> salary);
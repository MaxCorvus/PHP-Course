<?php



$Vanya = new Employee;
$Vanya -> name = "Vanya";
$Vanya -> age = 25;
$Vanya -> salary = 1000;

$Vasya = new Employee;
$Vasya -> name = "Vasya";
$Vasya -> age = 26;
$Vasya -> salary = 2000;

echo $Vanya -> getSalary() + $Vasya -> getSalary() . "<br>";

class Employee {
    public $name, $age, $salary;
    function getName()
    {
        return $this -> name;
    }

    function getAge() {
        return $this -> age;
    }

    function getSalary() {
        return $this -> salary;
    }

    function checkAge() {
        return $this -> age > 18 ? TRUE:FALSE;
    }

    function doubleSalary() {
        return $this -> salary * 2;
    }

    function setAge($newAge) {
        return $this -> age = $newAge;
    }
}
    $Vanya -> setAge(30);
    echo $Vanya -> age;
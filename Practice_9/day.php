<?php

class Day {
public $dayOfWeek;
public $fullDate;

   function __construct($day)
    {
        $month = date ('m');
        $year = date ('Y');
        $currentTimestamp = mktime(0, 0, 0, $month, $day, $year);
        $this->dayOfWeek = date('l', $currentTimestamp);
        $this->fullDate = date('d-m-Y', $currentTimestamp);
    }

    function selectedDay(){

        echo "The day is $this->dayOfWeek - $this->fullDate";
    }
    

}
$day = isset($_GET['dayOfMonth']) ? $_GET['dayOfMonth'] : date('d');

$object = new Day($day);
$object->selectedDay();
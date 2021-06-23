<?php
declare(strict_types=1);
class Day {
public string $dayOfWeek;
public string $fullDate;

   function __construct($day)
    {
        $month = (int) date ('m');
        $year = (int) date ('Y');
        $currentTimestamp = mktime(0, 0, 0, $month, $day, $year);
        $this->dayOfWeek = date('l', $currentTimestamp);
        $this->fullDate = date('d-m-Y', $currentTimestamp);
    }

    public function ShowSelectedDay()
    {
        echo "The day is $this->dayOfWeek - $this->fullDate";
    }
}
 $day = isset($_GET['dayOfMonth']) ? (int) $_GET['dayOfMonth'] : (int) date('d');

$currentDay = new Day($day);
$currentDay->ShowSelectedDay();
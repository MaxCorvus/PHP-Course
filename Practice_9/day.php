<?php

$day = isset($_GET['dayOfMonth']) ? $_GET['dayOfMonth'] : date('d');
$month = date ('m');
$year = date ('Y');
$currentTimestamp = mktime(0, 0, 0, $month, $day, $year);
$dayOfWeek = date('l', $currentTimestamp);
$fullDate = date('d-m-Y', $currentTimestamp);
echo "The day is $dayOfWeek - $fullDate";
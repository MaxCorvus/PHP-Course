<table>


<?php
$year = date ('Y');
$month = date ('n');
$daysInMonth = cal_days_in_month (CAL_GREGORIAN, $month, $year);
$firstDayOfMonthTimestamp = mktime(0, 0, 0, $month, 1, $year);
$dayOfWeek = date('w', $firstDayOfMonthTimestamp);
echo '<tr>';
$week = [
    'Sun',
    'Mon', 
    'Tue', 
    'Wed', 
    'Thu', 
    'Fri', 
    'Sat'  
];

foreach ($week as $index => $dayName) {
    
    echo "<td>$dayName</td>";
}

   

echo "</tr><tr>";

for ($i = 0; $i < $dayOfWeek; $i++) {
    echo "<td></td>";
}


for ($day = 1; $day <= $daysInMonth; $day++) {
    echo "<td><a href = day?dayOfMonth=$day>$day</a></td>";
    if (($day + $dayOfWeek) % 7 === 0) {
         echo "</tr><tr>";
    }
}
echo '</tr>';
?>

</table>
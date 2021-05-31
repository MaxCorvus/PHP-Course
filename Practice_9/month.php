<table>


<?php
$year = date ('Y');
$month = date ('n');
$daysInMonth = cal_days_in_month (CAL_GREGORIAN, $month, $year);
echo '<tr>';
for ($day = 1; $day <= $daysInMonth; $day++) {
    echo "<td>$day</td>";
    if ($day % 7 === 0) {
         echo "</tr><tr>";
    }
}
echo '</tr>';
?>

</table>
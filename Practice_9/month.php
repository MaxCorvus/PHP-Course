<?php
class Month {
    private int $daysInMonth;
    private string $dayOfWeek;

    public array $week = [
        'Sun',
        'Mon', 
        'Tue', 
        'Wed', 
        'Thu', 
        'Fri', 
        'Sat'  
    ];

    function __construct(string $year, string $month)
    {
        $this->daysInMonth = cal_days_in_month (CAL_GREGORIAN, $month, $year);
        $this->dayOfWeek = date('w', mktime(0, 0, 0, $month, 1, $year));
    }

    public function handle()
    {
        echo '<table>';

        $this->echoTitles();
        $this->echoDays();

        echo '</table>';
    }

    public function echoTitles()
    {
        echo '<tr>';

        foreach ($this->week as $index => $dayName) 
        {

            echo "<td>$dayName</td>";
        }

        echo '</tr>';
    }

    public function echoDays()
    {
        echo "<tr>";

        $this->makeIndent();

        for ($day = 1; $day <= $this->daysInMonth; $day++) {
            echo "<td><a href = day?dayOfMonth=$day>$day</a></td>";

            if (($day + $this->dayOfWeek) % 7 === 0) {
                echo "</tr><tr>";
            }
        }

        echo '</tr>';
    }


    private function makeIndent()
    {
        for ($i = 0; $i < $this->dayOfWeek; $i++) 
        {
            echo "<td></td>";
        }
    }
}

$month = new Month(date('Y'), date('n'));
$month->handle();

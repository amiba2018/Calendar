<?php

// if(isset($_GET['d'])) {

// }
$year = date('Y');
$month = date('m');
$day = date('d');

$first_week = date('w', strtotime($year.$month.'01'));
$month_day = date("t" , strtotime($year.$month.'01'));

$prev_month = date("Y-m-d", mktime(0,0,0, $month-1, 1, $year));
$next_month = date("Y-m-d", mktime(0,0,0, $month+1, 1, $year));

$calendar_table = '<table><tr>';

$dayWeek_number = 0;

while ($first_week--) {
    $dayWeek_number++;
    $calendar_table .= '<td></td>';
}



for ($i=1; $i<=$month_day; $i++) {
    if($dayWeek_number % 7 == 0) {
        $calendar_table .= "</tr><tr>";
        $dayWeek_number = 0;
    }
    $dayWeek_number++;
    $calendar_table .= "<td>$i</td>";
}

$dayWeek_cell = 7 - $dayWeek_number;

while ($dayWeek_cell--) {
    $calendar_table .= '<td></td>';
}

$dayWeek_cell .="</tr>";

$calendar_table .= "</tr></table>";
<?php

if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    $ym = date('Y-m');
}
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

$year = date('Y', $timestamp);
$month = date('m', $timestamp);
$day = date('d', $timestamp);

$first_week = date('w', strtotime($year.$month.'01'));
$month_day = date("t" , strtotime($year.$month.'01'));

$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));
echo $next_month;

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
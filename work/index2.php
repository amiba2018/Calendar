<?php
$year = date('Y');
$month = date('m');
$end_month = date('t', strtotime($year.$month.'01'));
$first_week = date('w', strtotime($year.$month.'01'));
$last_week = date('w', strtotime($year.$month.$end_month));

$aryCalendar = [];
$j = 0; //週0~6
for($i = 0; $i < $first_week; $i++) {
    $aryCalendar[$j][] = '';
}
// 日付なので1
for ($i = 1; $i <= $end_month; $i++) {
    //日曜日まで進んだら改行
    if(isset($aryCalendar[$j]) && count($aryCalendar[$j]) === 7) {
        $j++;
    }
    $aryCalendar[$j][] = $i; 
    // echo $i . PHP_EOL;
}
for($i = count($aryCalendar[$j]); $i < 7; $i++) {
    $aryCalendar[$j][] = '';
}
$aryWeek = ['日', '月', '火', '水', '木', '金', '土'];
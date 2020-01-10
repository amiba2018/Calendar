<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Calendar</title>
</head>
<body>
    <table class="calendar">
    <!-- 曜日の表示 -->
    <tr>
    <?php
    require 'index2.php';
     foreach($aryWeek as $week){
      echo"<th>$week</th>";
    } 
    ?>
    </tr>
    <!-- 日数の表示 -->
    <?php
    foreach($aryCalendar as $tr){
      echo"<tr>";
        foreach($tr as $td){
          echo"<td>$td</td>";
        }
      echo"</tr>";
    }
    ?>
</table>
</body>
</html>
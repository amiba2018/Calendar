<?php
require 'work2.php';
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <title>Calendar</title>
    </head>
    <body>
        <table>
            <tr>
                <th><a href="?d=<?php echo $prev_month; ?>">←</a></th>
                <th colspan="5"><?php echo $year; ?>年<?php echo $month; ?>月</th>
                <th><a href="?d=<?php echo $next_month; ?>">→</th>
            </tr>
                <?php echo $calendar_table; ?>
        </table>
    </body>
</html>
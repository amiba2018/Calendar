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
                <th><a href="?ym=<?php echo $prev; ?>">←</a></th>
                <th colspan="5"><?php echo $year; ?>年<?php echo $month; ?>月</th>
                <th><a href="?ym=<?php echo $next; ?>">→</th>
            </tr>
                <?php echo $calendar_table; ?>
        </table>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <table border="1">
            <?php
            for($i = 1; $i <= 9; $i++){
                print '<tr>';
                for($j = 1; $j <= 9; $j++){
                    $ans = $i * $j;  
                    print "<td>{$ans}</td>";
                    //上記のprint内で直接{$i * $j}と記述したがエラーが出てしまった。
                    //print "<td>{$i * $j}</td>";
                }
                print '</tr>';
            }
            ?>
        </table>
    </body>
</html>



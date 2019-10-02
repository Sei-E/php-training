<h1>6章のチェック</h1>
<?php
print '<h2>第一問</h2>';
function square(float $base = 1, float $height = 1):float {
    return $base * $height / 2;
}
print square() . '<br />';
print square(10, 73) . '<br />';
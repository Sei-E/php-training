<?php
function product(float ...$args): float {
    $result = 1;
    foreach($args as $arg){
        $result *= $arg;
    }
    return $result;
}

$answer = product(2, 3, 4, 5, 6,);
print "総積は{$answer}です。";
<?php
print '<br />1------------------------<br />';
$sum = 0;
for($i = 1; $i <= 100; $i++){
    if($i % 2 === 0){ continue; }
    $sum += $i;
}
print "1から100の範囲の奇数値の合計は{$sum}です。<br />";

print '<br />2------------------------<br />';
$sum = 0;
$i = 1;
while ($i <=100 ){
    $sum += $i;
    if ($sum > 1000){ break; }
    $i++;
}
print "合計が1000を超えるのは、1〜{$i}を加算したときです。<br />";

print '<br />3------------------------<br />';
print <<<'EOD'
    ①[<br />
    ②]<br />
    ③foreach<br />
    ④&$item<br />
    ⑤*<br />
EOD;

print '<br />4------------------------<br />';
$language ='JavaScript';
switch ($language){
    case 'PHP':
    case 'JSP':
    case 'ASP':
        print 'サーバーサイド技術<br />';
        break;
    case 'JavaScript':
    case 'VBScript':
        print 'クライアントサイド技術<br />';
        break;
}

print '<br />5------------------------<br />';
$language ='JavaScript';
if ($language == 'PHP' || $language == 'JSP' || $language == 'ASP'){
    print 'サーバーサイド技術<br />';
} elseif ($language == 'JavaScript' || $language == 'VBScript'){
    print 'クライアントサイド技術<br />';
}

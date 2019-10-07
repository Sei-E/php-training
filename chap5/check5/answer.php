<h1>5章のチェック</h1>
<?php
print '<h2>第一問</h2>';
print '①<br />';
$str_1 = 'PHPはPHP:Hypertext Preprocessorの略です';
print '最後に登場する「PHP」の位置は' . mb_strrpos($str_1,'PHP') . 'です。';

print '<br />②<br />';
printf('%sの気温は%.1f℃です。','弘前', 15.156);

print '<br />③<br />';
$str_3 = 'wings knowledge';
print ucfirst($str_3);

print '<br />④<br />';
$str_4 = 'ボクの名前はリオです。';
$src = ['ボク', 'リオ'];
$rep = ['私', '凛生'];
print str_replace($src, $rep, $str_4);


print '<h2>第二問</h2>';
$data = ['高江', '青木', '片渕'];

print '①<br />';
array_push($data, '山田', '日尾');
print_r($data);

print '<br />②<br />';
array_unshift($data, '掛谷', '土井');
print_r($data);

print '<br />③<br />';
print_r(array_slice($data, 2, 3));

print '<h2>第三問</h2>';
print <<<'EOD'
①fopen<br />
②ab<br />
③LOCK_EX<br />
④while<br />
⑤fgets<br />
⑥preg_match<br />
⑦i<br />
⑧$line<br />
⑨$data<br />
⑩LOCK_UN<br />
⑪$file<br />
EOD;

print '<h2>第四問</h2>';
print '<br />①<br />';
print 'pow(5, 3) ==><br />' . pow(5, 3);
print '<br />②<br />';
print 'abs(-12) ==><br />' . abs(-12);
print '<br />③<br />';
$x = 'hoge';
print '$x ==><br />';
unset($x);
var_dump($x);
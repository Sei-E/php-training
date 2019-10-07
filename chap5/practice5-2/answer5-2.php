<?php
mb_internal_encoding('UTF-8');

print '第一問<br />';
$str = 'サーバサイド技術';
print mb_substr($str, 3, 3);

print '<br /><br />第二問<br />';
$str = 'ｻｰﾊﾞｻｲﾄﾞ技術';
print mb_convert_kana($str, 'KV');

print '<br /><br />第三問<br />';
mb_convert_encording($data, 'EUC-JP', 'SJIS');
$data = 'こんにちは'; 
print $data;    //文字化けする
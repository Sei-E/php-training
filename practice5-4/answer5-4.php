<?php

print '第一問<br />';
$str = '住所は〒184-0000 鎌ヶ谷市梶野町0-0-0です。';
if(preg_match('/([0-9]{3})-([0-9]{4})/', $str, $data)){
    print $data[0];
}

print '<br /><br />';
print '第二問<br />';
$str = 'お問い合わせはCQW15204@nifty.comまで';
print preg_replace('/[a-z0-9\.\-]+@([a-z0-9\-]+\.)+[a-z0-9\-]+/i', '<a href="mailto:$0">$0</a>', $str);
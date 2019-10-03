<?php
$time = '2016年12月04日';
$fmt = 'Y年m月d日';
$dt = DateTime::createFromFormat($fmt, $time);
print $dt->format('Y/m/d(D)');

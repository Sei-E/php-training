<?php
$now = new DateTime();
print $now->format('現在の日付はY年m月d日です。'). '<br />';
print $now->format('現在の月の末日はY年m月t日で、');
$now->add(new DateInterval('P1M10D'));
print $now->format('現在から1ヶ月10日後の日付はY年m月d日です。'). '<br />';

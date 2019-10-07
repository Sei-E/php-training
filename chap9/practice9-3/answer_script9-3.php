<?php
try {
    //第一引数があっているか自信がないです。
    $db = new PDO('mysql:dbname=selfphp; host=127.0.0.1; charset=utf8', 'selfusr', 'selfpass');
    //setAttribute(オプション名, 設定値)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_EXEPTION);
    print 'データベースの接続を確立しました。';
} catch (PDOException $e) {
    print "エラーメッセージ：{$e->getMessage()}";
}

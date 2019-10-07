<?php
require_once '../../DbManager.php';
require_once '../../Encode.php';

try {
    $db = getDB();
    $stt = $db->query('SELECT * FROM book ORDERD BY published DESC');
    print '<ul>';
    while($row = $stt->fetch(PDO::FETCH_OBJ)){
?>
    <li><?=e($row->title) ?>
        (<?=e($row->publish)?>) </li>
<?php
    }
    print '</ul>';
} catch (PDOException $e) {
    print "エラーメッセージ：{$e->getMessage()}";
}

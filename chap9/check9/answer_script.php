<form method="POST" action="prac3.php">
    <label for "title">書名：</label>
    <input id="title" type="text" name="title" size="20" />
    <input type="submit" value="検索" />
</form>
<?php
if (isset($_POST['title'])) {
    require_once '../../DbManager.php';
    require_once '../../Encode.php';

    try {
        $db = getDB();
        $stt = $db->prepare('SELECT * FROM book WHERE title LIKE :title');
        $stt->bindValue(':title', '%'.$_POST['title'].'%')
        $stt->execute();
        print '<ul>';
        while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
?>
    <li><?=e($row['title']) ?>
        (<?=e($row['publish'])?>) </li>
<?php
    }
    print '</ul>';
} catch (PDOException $e) {
    print "エラーメッセージ：{$e->getMessage()}";
}
?>

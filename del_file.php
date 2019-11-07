<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=upload";
$pdo = new PDO($dsn,'root','');

$id=$_GET['id'];

if ($_GET['do']==true) {
    $sql = "delete from files where id='$id'";
    $sql -> exec($sql);
    header("location:manage.php");
} else {
    header("location:manage.php");
}

$sql="delete from files where id='$id'";
$pdo->exec($sql);
?>
你是否確認刪除檔案?$_GET
<a href="?do=true&id=<?=$id;?>">確認刪除</a>====
<a href="?do=false&id=<?=$id;?>">取消</a>
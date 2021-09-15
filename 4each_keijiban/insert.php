<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=lesson;host=localhost;","root","");

$pdo->exec("insert into 4each_keijiban_new(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:localhost:8080/4each_keijiban_new/index.php");

?>
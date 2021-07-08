<?php
require('Hero.php');
require('Brave.php');
require('Witch.php');
require('Priest.php');

//インスタンス生成
$Hero = new Hero('村人A', '男', '村人', 5, 5, 5, 5);
$Brave = new Brave('ようこ', '女', '勇者', 24, 6, 13, 8);
$Witch = new Witch('りな', '女', '魔法使い', 16, 11, 5, 4);
$Priest = new Priest('たかし', '男', '僧侶', 18, 8, 9, 6);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskExtends</title>
</head>
<body>

    <p><?php echo $Hero->attack() ?></p>
    <p><?php echo $Brave->attack() ?></p>
    <p><?php echo $Witch->attack() ?></p>
    <p><?php echo $Priest->attack() ?></p>

</body>
</html>
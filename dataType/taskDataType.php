<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskDataType</title>
</head>
<body>

    <!-- 課題1　-->
    <?php $task1 = 5; ?>
    <p>りんごが<?php echo("$task1"); ?>個あります。</p>
   
    <!-- 課題2　-->
    <p><?php echo("string型を使用するときに、ダブルクオート(\")を表示する場合は、バックスラッシュ(\)が必要です。"); ?></p>

    <!-- 課題3　-->
    <p><?php echo('I\'m Security Engineer'); ?></p>

    <!-- 課題3　-->
    <p><?php
        const GOOD_EVENING = "こんばんは";
        $name = "太郎くん";
        echo(GOOD_EVENING . "、$name");
    ?></p>
   
</body>
</html>


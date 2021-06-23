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
    <?php $appleQuantity = 5; ?>
    <p>りんごが<?php echo($appleQuantity); ?>個あります。</p>
   
    <!-- 課題2　-->
    <?php $str = "string型を使用するときに、ダブルクオート(\")を表示する場合は、バックスラッシュ(\)が必要です。"; ?>
    <p><?php echo( $str ); ?></p>

    <!-- 課題3　-->
    <?php $str2 = 'I\'m Security Engineer'; ?>
    <p><?php echo( $str2 ); ?></p>

    <!-- 課題4　-->
    <p><?php
        const GOOD_EVENING = "こんばんは";
        $name = "太郎くん";
        echo(GOOD_EVENING . "、$name");
    ?></p>
   
</body>
</html>
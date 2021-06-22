<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskBranch</title>
</head>
<body>

    <?php $string = "100"; ?>

    <h1>課題1</h1>

    <!-- 課題1-1 -->
    <p><?php 
        if($string == 100) {
            echo("\$string100は100です。");
        } else {
            echo("\$string100は100ではありません。");
        }
    ?></p>

    <!-- 課題1-2 -->
    <p><?php 
        if($string === 100) {
            echo("\$string100は数字の100です。");
        } else {
            echo("\$string100は数字の100ではありません。");
        }
    ?></p>

    <!-- 課題1-3 -->
    <p><?php 
        if($string > 100) {
            echo("\$string100は101以上です。");
        } else {
            echo("\$string100は101以上ではありません。");
        }
    ?></p>

    <!-- 課題1-4 -->
    <p><?php 
        if($string >= 100) {
            echo("\$string100は100以上です。");
        } else {
            echo("\$string100は100以上ではありません。");
        }
    ?></p>


    <h1>課題2</h1>

    <!-- 課題2-1 -->
    <p><?php 
        $jap = rand(1,100);
        $mat = rand(1,100);
        $sci = rand(1,100);
        $soc = rand(1,100);
        $eng = rand(1,100);

        $aveA = ($jap + $mat + $sci + $soc + $eng) / 5;

        echo("Aくんの平均点は{$aveA}点です。");
    ?></p>
        
    <!-- 課題2-2 -->
    <p><?php 
        if($aveA >= 63.7) {
            echo("Aくんの平均点は67.3以上です。");
        } else {
            echo("Aくんの平均点は67.3未満です。");
        }
    ?></p>


    <h1>課題3</h1>

    <!-- 課題3-1 -->
    <p><?php 
        $case = '1';
        switch ($case) {
            case true:
                echo 'bool';
                break;

            case 1:
                echo 'int';
                break;

             case '1':
                echo 'string';
                break;

            default:
                echo 'other';
        }
    ?></p>

    <!-- 課題3-2 -->
    <p><?php 
        $case = '1';
        switch ($case) {
            case $case === true:
                echo 'bool';
                break;

            case $case === 1:
                echo 'int';
                break;

             case $case === '1':
                echo 'string';
                break;

            default:
                echo 'other';
        }
    ?></p>

</body>
<body>
</body>
</html>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskArray</title>
</head>
<body>

    <h1>課題1</h1>

    <!-- 課題1-1 -->
    <?php 
        $aveSalaryArray = [
            2018 => 4410000,
            2017 => 4320000,
            2016 => 4220000,
            2015 => 4200000,
            2014 => 4150000
        ];
    ?>

    <p><?php 
        echo("<pre>");
        var_dump($aveSalaryArray);
        echo("</pre>");
    ?></p>

    <!-- 課題1-2 -->
    <?php 
        $ave = ($aveSalaryArray[2018] + 
                $aveSalaryArray[2017] +
                $aveSalaryArray[2016] +
                $aveSalaryArray[2015] +
                $aveSalaryArray[2014] ) / 5;
    ?>

    <p>過去5年間の平均年収:<?php echo("$ave"); ?>円</p>


    <h1>課題2</h1>

    <!-- 課題2-1 -->
    <?php 
        $scoreArray['A'] = 80;
        $scoreArray['B'] = 55;
        $scoreArray['C'] = 61;
        $scoreArray['D'] = 76;
        $scoreArray['E'] = 34;
        $scoreArray['F'] = 93;
    ?>

    <p><?php 
        echo("<pre>");
        var_dump($scoreArray);
        echo("</pre>");
    ?></p>

    <!-- 課題2-2 -->
    <?php  
        $aveScore = ($scoreArray['A'] +
                     $scoreArray['B'] +
                     $scoreArray['C'] +
                     $scoreArray['D'] +
                     $scoreArray['E'] +
                     $scoreArray['F'] ) / 6;
    ?>

    <p>平均点: <?php echo("$aveScore"); ?>点</p>



</body>
<body>
</body>
</html>
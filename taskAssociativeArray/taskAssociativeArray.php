<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskAssociativeArray</title>
</head>
<body>

<?php 
    $testScoreArray = [
        'A' => [
           '国語' => 85,
           '数学' => 64,
           '社会' => 45,
           '理科' => 77,
           '英語' => 80, 
        ],
        'B' => [
            '国語' => 56,
            '数学' => 89,
            '社会' => 73,
            '理科' => 85,
            '英語' => 78, 
        ],
        'C' => [
            '国語' => 98,
            '数学' => 87,
            '社会' => 88,
            '理科' => 92,
            '英語' => 96, 
        ],
    ];
    ?>

    <!-- 課題1-1 -->
    <?php $scienceA = $testScoreArray['A']['理科']; ?>
    <p>1: <?php echo($scienceA); ?>点</p>

    <!-- 課題1-2 -->
    <?php $englishB = $testScoreArray['B']['英語']; ?>
    <p>2: <?php echo($englishB); ?>点</p>

    <!-- 課題1-3 -->
    <?php  
        $sumA = array_sum($testScoreArray['A']); 
        $averageA = round($sumA / count($testScoreArray['A']));
    ?>
    <p>3: <?php echo($averageA); ?>点</p>

    <!-- 課題1-4 -->
    <?php 
        $sumC = array_sum($testScoreArray['B']);
        $averageC = round($sumC / count($testScoreArray['C']));
    ?>
    <p>4: <?php echo($averageC); ?>点</p>

    <!-- 課題1-5 -->
    <?php
        $sumMath = array_sum(array_column($testScoreArray,'数学'));
        $averageMath = round($sumMath / count($testScoreArray));
    ?>
    <p>5: <?php echo($averageMath); ?>点</p>


</body>
</html>


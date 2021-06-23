<?php 
    //課題1
    $fruits = [
        'apple' => [
            'japanese' => 'りんご',
            'price' => 80,
        ],
        'orenge' => [
            'japanese' => 'オレンジ',
            'price' => 120,
        ],
        'grape' => [
            'japanese' => 'ぶどう',
            'price' => 220,
        ],
    ];


    //課題2
    //配列作成
    $scoreArray = [
        'A' => [
            '国語' => 34,
            '数学' => 67,
            '社会' => 45,
            '理科' => 34,
            '英語' => 89,
        ],
        'B' => [
            '国語' => 76,
            '数学' => 72,
            '社会' => 65,
            '理科' => 77,
            '英語' => 80,
        ],
        'C' => [
            '国語' => 98,
            '数学' => 87,
            '社会' => 88,
            '理科' => 92,
            '英語' => 96,
        ],
        'D' => [
            '国語' => 65,
            '数学' => 34,
            '社会' => 71,
            '理科' => 56,
            '英語' => 76,
        ],
        'E' => [
            '国語' => 67,
            '数学' => 55,
            '社会' => 87,
            '理科' => 56,
            '英語' => 69,
        ],
        'F' => [
            '国語' => 81,
            '数学' => 79,
            '社会' => 74,
            '理科' => 82,
            '英語' => 85,
        ],
        '平均' => [
        ],
    ];

    //各教科ごとの平均計算
    $sumJap = array_sum(array_column($scoreArray,'国語'));
    $aveJap = round($sumJap / 6, 1);

    $sumMat = array_sum(array_column($scoreArray,'数学'));
    $aveMat = round($sumMat / 6, 1);

    $sumSoc = array_sum(array_column($scoreArray,'社会'));
    $aveSoc = round($sumSoc / 6, 1);

    $sumSci = array_sum(array_column($scoreArray,'理科'));
    $aveSci = round($sumSci / 6, 1);

    $sumEng = array_sum(array_column($scoreArray,'英語'));
    $aveEng = round($sumEng / 6, 1);

    //A〜Fの平均点
    $sumA = array_sum($scoreArray['A']);
    $aveA = round($sumA / count($scoreArray['A']),1);

    $sumB = array_sum($scoreArray['B']);
    $aveB = round($sumB / count($scoreArray['B']),1);

    $sumC = array_sum($scoreArray['C']);
    $aveC = round($sumC / count($scoreArray['C']),1);

    $sumD = array_sum($scoreArray['D']);
    $aveD = round($sumD / count($scoreArray['D']),1);

    $sumE = array_sum($scoreArray['E']);
    $aveE = round($sumE / count($scoreArray['E']),1);

    $sumF = array_sum($scoreArray['F']);
    $aveF = round($sumF / count($scoreArray['F']),1);

    //配列に平均値挿入
    $scoreArray['平均'] += array('国語' => $aveJap);
    $scoreArray['平均'] += array('数学' => $aveMat);
    $scoreArray['平均'] += array('社会' => $aveSoc);
    $scoreArray['平均'] += array('理科' => $aveSci);
    $scoreArray['平均'] += array('英語' => $aveEng);

    $scoreArray['A'] += array('平均' => $aveA);
    $scoreArray['B'] += array('平均' => $aveB);
    $scoreArray['C'] += array('平均' => $aveC);
    $scoreArray['D'] += array('平均' => $aveD);
    $scoreArray['E'] += array('平均' => $aveE);
    $scoreArray['F'] += array('平均' => $aveF);

    //A〜Fの5教科平均点数の平均
    $sumAverage = array_sum(array_column($scoreArray,'平均'));
    $scoreAverage = round($sumAverage / 6, 1);
    //↑の要素追加
    $scoreArray['平均'] += array('平均' => $scoreAverage);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskLoop</title>
</head>
<body>

    <h1>課題1</h1>

    <p><?php
        foreach($fruits as $key => $value) {
            echo('英語では' . $key . 'と表示され、日本語では' . $value['japanese'] . '、価格は' . $value['price'] . '円です。<br>');
        }
    ?></p>


    <h1>課題2</h1>
    
    <!-- テーブル作成　-->
    <table border="1">

        <tr> <!-- 見出し -->
            <th>名前</th>
            <th>国語</th>
            <th>数学</th>
            <th>社会</th>
            <th>理科</th>
            <th>英語</th>
            <th>平均</th>
        </tr>

        <tr> <!-- 教科カラム -->
            <?php foreach($scoreArray as $key => $value) { ?>
            <td><?= $key ?></td> 
            <td><?= $value['国語'] ?></td>
            <td><?= $value['数学'] ?></td>
            <td><?= $value['社会'] ?></td>
            <td><?= $value['理科'] ?></td>
            <td><?= $value['英語'] ?></td>
            <td><?= $value['平均'] ?></td>
        </tr>
            <?php } ?>

    </table>


</body>
</html>
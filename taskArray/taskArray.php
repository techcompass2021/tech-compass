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
        $averageSalaryArray = [
            2018 => 4410000,
            2017 => 4320000,
            2016 => 4220000,
            2015 => 4200000,
            2014 => 4150000
        ];
    ?>

    <p><?php 
        echo("<pre>");
        var_dump($averageSalaryArray);
        echo("</pre>");
    ?></p>

    <!-- 課題1-2 -->
    <?php $averageSalary5Y = round(array_sum($averageSalaryArray) / count($averageSalaryArray)); ?>

    <p>過去5年間の平均年収: <?php echo($averageSalary5Y); ?>円</p>


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
        $averageScore = round(array_sum($scoreArray) / count($scoreArray));
    ?>

    <p>平均点: <?php echo($averageScore); ?>点</p>



</body>
<body>
</body>
</html>
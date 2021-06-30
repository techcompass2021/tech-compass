<?php
//課題1
require_once("externalFunctions.php");
$num1 = 84;
$num2 = 37;

//課題2
$number1 = 84; 
$number2 = 37;

//課題3-1
$averageScore = [ //各科目平均点
    'nationalLanguage' => 63,
    'math' => 67,
    'society' => 71,
    'science' => 68,
    'english' => 66,
];

$Ascore = [ //Aくんの点数
    'nationalLanguage' => 76,
    'math' => 72,
    'society' => 65,
    'science' => 68,
    'english' => 80,
];

//課題3-2
$subjectTitle = [ //各科目名
    'nationalLanguage' => '国語',
    'math' => '数学',
    'society' => '社会',
    'science' => '理科',
    'english' => '英語',
];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskExternal</title>
</head>
<body>

    <h1>課題1</h1>
    <p><?php echo("$num1 + $num2 = " . calcNumber($num1, $num2, true)); ?></p>
    <p><?php echo("$num1 - $num2 = " . calcNumber($num1, $num2, false)); ?></p>


    <h1>課題2</h1>
    <p><?php echo ($number1 . " の2乗は" . $calc($number1, true)); ?></p>
    <p><?php echo ($number2 . " の3乗は" . $calc($number2, false)); ?></p>

    
    <h1>課題3</h1>
    <p>＜3ー1＞</p>
    <p><?php echo ("全科目の平均点は " . calcAverage($averageScore) . "です。"); ?></p>
    <p><?php echo ("Aくんの平均点は " . calcAverage($Ascore) . "です。"); ?></p>

    <p>＜3ー2＞</p>
    <?php 
        $differenceScore = differenceScore($averageScore, $Ascore);
                
            foreach ($differenceScore as $key => $value) {

                if ($averageScore[$key] < $Ascore[$key]){
                    echo ($subjectTitle[$key] . "は、平均点より" . $differenceScore[$key] . "点高いです。<br>");
                } elseif ($averageScore[$key] > $Ascore[$key]) {
                    echo ($subjectTitle[$key] . "は、平均点より" . $differenceScore[$key] . "点低いです。<br>");
                } elseif ($averageScore[$key] == $Ascore[$key]) {
                    echo ($subjectTitle[$key] . "は、平均点と同じです。<br>");
                }
                
            }      
    ?>

</body>
</html>
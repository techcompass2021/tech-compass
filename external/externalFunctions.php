<?php //課題1

function calcNumber (int $int1, int $int2, bool $iaAdd) : int {

    $result = 0;
    if ($isAdd) {
        $result = $int1 + $int2;
    }
    else {
        $result = $int1 - $int2;
    }

    return $result;
};
?>

<?php //課題2
$calc = function (int $int, bool $isPow){

    $calcresult = 0;
    if ($isPow) {
        $calcresult = pow($int, 2);
    }
    else {
        $calcresult = pow($int, 3);
    }

    return $calcresult;
};

?>

<?php //課題3-1

function calcAverage (array $array) : int {
    $sum = array_sum($array);
    $average = round($sum / count($array));

    return $average;
};
?>

<?php //課題3-2

 function differenceScore (array $array1, array $array2) : array {

    $differenceScoreArray = [];
    $mergeScore = array_merge_recursive($array1, $array2);
    foreach ($mergeScore as $key => $value){

        $calc = $value[0] - $value[1];
        $difference = abs($calc);
        $differenceScoreArray[$key] = $difference;
        
    }

    return $differenceScoreArray;
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskExternal</title>
</head>
<body>

       



    

    


</body>
</html>
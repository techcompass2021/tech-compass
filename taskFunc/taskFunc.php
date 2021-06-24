<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskFunc</title>
</head>
<body>

    <h1>課題1</h1>

    <?php 
        //display関数作成
        function display(string $string) {
            echo ($string);
        }

        //関数displayを使用して文字列を表示
        $num1 = 254;
        $num2 = 322;
        $result = $num1 * $num2;
         
        $string = "$num1 × $num2 = $result";
    ?>

    <p><?php echo ("関数で文字列を表示!"); ?></p>
    <p><?php display($string); ?></p>



    <h1>課題2</h1>

    <?php 
        function createRandomNumberArray() : array {

            $randomNumberArray = range(1, 100);
            shuffle($randomNumberArray);
            $randomNumberArray = array_slice($randomNumberArray, 0, 10);

            return $randomNumberArray;
        }
    ?>

    <p><?php
        echo("<pre>");
        var_dump(createRandomNumberArray());
        echo("</pre>");
    ?></p>
   


   <h1>課題3</h1>

   <?php 
        //関数作成
        function createRandomNumberArrayAndDidplay() : array {

            $randomNumberArray2 = range(1, 100);
            shuffle($randomNumberArray2);
            $randomNumberArray2 = array_slice($randomNumberArray2, 0, 10);


            return $randomNumberArray2;
        }

        //関数を使用して数値を表示
        foreach(createRandomNumberArrayAndDidplay() as $value){
            $number += 1;
            $string = "{$number}番目の数値: $value<br><br>";
            display($string);
        }
    ?>



    <h1>課題4</h1>

    <p>＜4ー1＞</p>
    <?php
        function numberArrayCalcAndDisplay(array $array) : int {
            
            //計算式の表示
            $formula = "";
            foreach($array as $value){
                if ($value === reset($array)){
                    echo($formula = "計算式は $value");
                } elseif($value >= 80) {
                    echo($formula = " - $value");
                } else {
                    echo($formula = " + $value");
                }
            }

            //計算の結果(111)
            $num = 0;
            foreach($array as $value){
                if($value >= 80) {
                    $num -= $value;
                } else {
                    $num += $value;
                }
            }
            
            return $num;
        }

        //引数の配列を作成、関数を利用して表示
        $data = [
            47,
            31,
            86,
            16,
            39,
            53,
            94,
            3,
            74,
            28,
        ];
            

        echo("<br><br>合計は" . numberArrayCalcAndDisplay($data) . "です！");
    ?>


    <p>＜4ー2＞</p>
    <?php 
        //関数作成
        function numberAverageCalc (array $array, int $int) : float {

            $sum = array_sum($array);
            $average = $sum / count($array);

            if ($int == 1) { //引数が1だった場合小数点1位を四捨五入
                $average = round($average);
            }
            if ($int == 2) { //引数が2だった場合小数点2位を四捨五入
                $average = round($average, 1);
            }

            return $average;
        }

        //引数の配列を作成、関数を利用して表示
        $data = [
            47,
            31,
            86,
            16,
            39,
            53,
            94,
            3,
            74,
            28,
        ];
    ?>
        
        <p><?php echo ("平均(小数点1位は四捨五入)は " . numberAverageCalc($data, 1) . "です！<br>"); ?></p>
        <p><?php echo ("平均(小数点2位は四捨五入)は " . numberAverageCalc($data, 2) . "です！"); ?></p>
    

    <p>＜4ー3＞</p>
    <?php
        $count = 0;
        foreach($data as $value) {
            if($value >= numberAverageCalc($data, 1)){
                $count += 1;
            }
        }
    ?>

    <p><?php echo("平均以上は {$count}個です！"); ?></p>
        

</body>
</html>

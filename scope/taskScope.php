<?php //関数作成
    function randomRecursiveCalc (int $int) : array {

        global $randomNumberArray;

        for ($i = 1; $i <= $int; $i++){
            $randomNumber = rand(0, 100);
            $randomNumberArray[] = $randomNumber;
        }

        $sum = array_sum($randomNumberArray);
        $randomNumberArray["total"] = $sum;

        return $randomNumberArray;
    }

    $randomParam = rand(1, 15);

    //関数呼び出し
    randomRecursiveCalc($randomParam);
?>

<!-- テーブルスタイリング　-->
<style>
table td {
    background: #60727b;
}
table tr:nth-child(odd) td {
    background: #79909c;
}
table td {
    color: #ffffff;
}
</style>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskScope</title>
</head>

<body>

    <!-- 課題1　結果 -->
    <p><?php echo ("処理回数: $randomParam <br>"); ?>
    <p><?php echo ("合計 " . $randomNumberArray["total"]); ?>


    <!-- //テーブル作成 -->
    <p><table border="1" style="border-color: white">

    <?php for ($i = 0; $i < $randomParam; $i++) { ?>
    <tr>
        <td width="100"> <?= $i + 1 ?> </td>
        <td width="100"> <?= $randomNumberArray[$i] ?> </td>
    </tr>
    <?php } ?>

    </table></p>

</body>
</html>
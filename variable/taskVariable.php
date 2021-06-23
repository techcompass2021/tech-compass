<?php 
    const TAX = 0.1;
    $applePrice = 110;
    $appleQuantity = 15;
    $orangePrice = 80;
    $orangeQuantity = 12;
    $totalQuantity = $appleQuantity + $orangeQuantity;

    //りんご総額
    $appleTotal = $applePrice * $appleQuantity;
    //オレンジ総額
    $orangeTotal = $orangePrice * $orangeQuantity;
    //総額（税抜）
    $total = $appleTotal + $orangeTotal;
    //総額（税込）
    $totalTax = $total * TAX;
    $totalIncludeTax = $total + $totalTax;
    //フルーツ1個あたりの金額（税抜）
    $eachPrice = round($total / $totalQuantity);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskVariable</title>
</head>
<body>

    <!-- 1個110円の林檎を15個、1個80円のオレンジを12個 消費税率は定数として10％-->

    <!-- 1,林檎の総額（税抜）--> 
    <p>りんごの総額(税抜): <?php echo ($appleTotal); ?>円</p>

    <!-- 2,オレンジの総額（税抜）-->
    <p>オレンジの総額(税抜): <?php echo ($orangeTotal); ?>円</p>

    <!-- 3,総額（税抜）-->
    <p>総額(税抜): <?php echo ($total); ?>円</p>

    <!-- 4,総額（税込）-->
    <p>総額(税込): <?php echo ($totalIncludeTax); ?>円</p>

    <!-- 5,フルーツ一個あたりの金額（税抜）小数点以下は四捨五入-->
    <p>フルーツ一個あたりの金額(税抜): <?php echo ($eachPrice); ?>円</p>

<body>
</body>
</html>

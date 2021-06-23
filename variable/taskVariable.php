<?php

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
    <?php
        const TAX = 0.1;
        $apple = 110;
        $orenge = 80;
    ?>
    <!-- 1,林檎の総額（税抜）--> 
    <?php $applePrice = $apple * 15; ?>
    <p><?php echo ( "りんごの総額(税抜): " . $applePrice . "円"); ?></p>

    <!-- 2,オレンジの総額（税抜）-->
    <?php $orengePrice = $orenge * 12; ?>
    <p><?php echo ( "オレンジの総額(税抜): " . $orengePrice . "円"); ?></p>

    <!-- 3,総額（税抜）-->
    <?php $total = $applePrice + $orengePrice; ?>
    <p><?php echo ( "総額(税抜): " . $total . "円"); ?></p>

    <!-- 4,総額（税込）-->
    <?php 
        $totalTax = $total * TAX;
        $total2 = $total + $totalTax;
    ?>
    <p><?php echo ( "総額(税込): " . $total2 . "円"); ?></p>

    <!-- 5,フルーツ一個あたりの金額（税抜）小数点以下は四捨五入-->
    <?php $fruits = round($total / 27); ?>
    <p><?php echo ( "フルーツ一個あたりの金額(税抜): " . $fruits . "円"); ?></p>

<body>
</body>
</html>

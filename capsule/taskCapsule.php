<?php
require('Hero.php');

//インスタンス生成
$hero1 = new Hero('ようこ', '女', '勇者', 24, 6, 13, 8);
$hero2 = new Hero('りな', '女', '魔法使い', 16, 11, 5, 4);
$hero3 = new Hero('たかし', '男', '僧侶', 18, 8, 9, 6);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskCapsule</title>
</head>
<body>
    <p><?php echo "ようこの攻撃力は" . $hero1->getAttackPower() . "です。" ?></p>
    <p><?php echo "りなの防御力は" . $hero2->getDefensivePower() . "です。" ?></p>
    <p><?php echo "たかしの攻撃力は" . $hero3->getAttackPower() . "です。" ?></p>
    <p><?php echo "たかしの防御力は" . $hero3->getDefensivePower() . "です。" ?></p>

</body>
</html>
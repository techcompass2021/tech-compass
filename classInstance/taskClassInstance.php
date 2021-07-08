<?php

//Heroファイル呼び出し
require('Hero.php');

//インスタンス生成
$hero1 = new Hero('ようこ', '女', '勇者', 24, 6, 13, 8);
$hero1->getStatus();

$hero2 = new Hero('りな', '女', '魔法使い', 16, 11, 5, 4);
$hero2->getStatus();

$hero3 = new Hero('たかし', '男', '僧侶', 18, 8, 9, 6);
$hero3->getStatus();

//インスタンスを配列$heroArrayにまとめる
$heroArray = [
    $hero1->getStatus(),
    $hero2->getStatus(),
    $hero3->getStatus(),
];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heroクラス</title>
</head>
<body>

<!-- テーブル作成 -->
<table border='1'>
    <tr>
        <th>名前</th>
        <th>性別</th>
        <th>職業</th>
        <th>HP</th>
        <th>MP</th>
        <th>攻撃力</th>
        <th>防御力</th>
    </tr>

<?php 
    foreach ($heroArray as $key => $value) { 
        echo("<tr>");

        for ($i = 0; $i <= 6; $i++) { 
            echo("<td>" . $value[$i] . "</td>");
        } 

        echo("<tr>");
    }
?>

</table>


</body>
</html>
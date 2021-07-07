<?php
//データベース接続 
$pdo = new PDO(
    'mysql:host=localhost;dbname=kadai;charset=utf8',
    'kotomiobata',
    '4bbc1204'
);


//SQL分実行

//実行文を変数へ代入
$sqlSelectId = 'select heritage.name as heritagename, country.name as countryname, area from country inner join heritage on country.id = country_id where heritage.id = :id';
$sqlSelect = 'select heritage.name as heritagename, country.name as countryname, area from country inner join heritage on country.id = country_id';

//GETパラメータでIDしていされた場合、そうでない場合の条件分岐
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare($sqlSelectId);
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
    $stmt = $pdo->query($sqlSelect);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHPによるデータ操作（PDO）</title>
    </head>
    <body>

        <!-- テーブル作成 -->
        <table border='1'>
            <tr>
                <th>世界遺産名</th>
                <th>国</th>
                <th>地域</th>
            </tr>

        <?php foreach ($records as $key => $value) { ?>
            <tr>
                <td><?= $value['heritagename'] ?></td>
                <td><?= $value['countryname'] ?></td>
                <td><?= $value['area'] ?></td>
            </tr>
        <?php } ?>

        </table>

    </body>
</html>
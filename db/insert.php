<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>データ挿入（INSERT）</title>
    </head>
    <body>
        <h1>課題1</h1>
        <p><?php echo (
            "INSERT INTO country values (1, '日本', 'アジア', '日本語', 81);<br>
            INSERT INTO country values (2, 'イタリア', 'ヨーロッパ', 'イタリア語', 39);<br>
            INSERT INTO country values (3, 'アメリカ合衆国', '北アメリカ', default, 1);<br>
            INSERT INTO country values (4, 'フランス', 'ヨーロッパ', 'フランス語', 33);<br>
            INSERT INTO country values (5, 'イギリス', 'ヨーロッパ', default, 44);<br>"
        ); ?></p>

        <h1>課題2</h1>
        <p><?php echo (
            "INSERT INTO heritage VALUES (1, '自由の女神像', 3, '文化');<br>
            INSERT INTO heritage VALUES (2, '小笠原諸島', 1, '自然');<br>
            INSERT INTO heritage VALUES (3, '姫路城', 1, '文化');<br>
            INSERT INTO heritage VALUES (4, 'ロンドン塔', 5, '文化');<br>
            INSERT INTO heritage VALUES (5, 'ナポリ歴史地区', 2, '文化');<br>
            INSERT INTO heritage VALUES (6, '富士山', 1, '自然');<br>
            INSERT INTO heritage VALUES (7, 'ヴェルサイユ宮殿と庭園', 4, '文化');<br>"
        ); ?></p>
        
    </body>
</html>
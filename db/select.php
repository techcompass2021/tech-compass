<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>テーブル作成（CREATE）</title>
    </head>
    <body>
        <h1>課題1</h1>
        <p><?php echo ("
            SELECT name, area FROM country WHERE area = 'ヨーロッパ'; <br>
            SELECT name, area FROM country WHERE area != 'ヨーロッパ'; <br>
            SELECT name, lang FROM country WHERE lang = '英語'; <br>
            SELECT name, area, lang FROM country WHERE area = 'ヨーロッパ' AND lang = '英語'; <br>
            SELECT * FROM country WHERE area = 'ヨーロッパ' OR number < 40;
        "); ?></p>
        
        <h1>課題2</h1>
        <p><?php echo ("
            SELECT name FROM country WHERE name LIKE 'イ%'; <br>
            SELECT name FROM country WHERE name LIKE '%ス'; <br>
            SELECT * FROM heritage WHERE country_id IN (1, 3); <br>
            SELECT * FROM heritage WHERE country_id NOT IN (1, 3); <br>
            SELECT name FROM heritage ORDER BY country_id ASC; <br>
            SELECT name FROM heritage ORDER BY country_id ASC, id DESC;
        "); ?></p>
        
    </body>
</html>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>テーブル結合（JOIN）</title>
    </head>
    <body>

        <h1>課題1</h1>
        <p><?php echo (" 
            SELECT country.name AS countryname, area, heritage.name AS heriname FROM country INNER JOIN heritage ON country.id = country_id; <br>
            SELECT heritage.name AS heriname, country.name AS countryname FROM country INNER JOIN heritage ON country.id = country_id WHERE area = 'ヨーロッパ'; <br>
            SELECT  heritage.name AS heriname, country.name AS countryname, number FROM country INNER JOIN heritage ON country.id = country_id WHERE number >= 40 AND type = '文化'; <br>
            SELECT heritage.name AS heriname, country.name AS countryname FROM country LEFT JOIN heritage ON country.id = country_id AND type = '自然';
        "); ?></p>
        
    </body>
</html>
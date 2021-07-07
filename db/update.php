<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>データ更新（UPDATE）</title>
    </head>
    <body>
        
        <p><?php echo (" 
            start transaction;
            UPDATE country SET area = '東アジア' WHERE id = 1;
            UPDATE heritage SET name = '富士山-信仰の対象と芸術の源泉', type = '文化' WHERE id = 6; 
            select * from country;
            select * from heritage;
            commit;
        "); ?></p>

    </body>
</html>
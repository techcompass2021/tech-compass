<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>データ削除（DELETE）</title>
    </head>
    <body>

        <p><?php echo ("
            start transaction; <br>
            DELETE FROM heritage WHERE id in (2, 3); <br>
            select * from heritage; <br>
            commit;
            "); ?></p>
        
    </body>
</html>
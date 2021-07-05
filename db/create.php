
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>テーブル作成（CREATE）</title>
    </head>
    <body>

        <p><?php echo ('CREATE TABLE country (id int AUTO_INCREMENT PRIMARY KEY NOT null, name varchar(20) NOT null, area varchar(10), lang varchar(10) DEFAULT "英語", number int NOT null DEFAULT 0);'); ?></p>
        <p><?php echo ('CREATE TABLE heritage (id int PRIMARY KEY AUTO_INCREMENT NOT null, name varchar(20) NOT null, country_id int NOT null, type varchar(2) NOT null);'); ?></p>
        
    </body>
</html>
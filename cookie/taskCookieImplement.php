<?php

/**
 * 表示を行う
 * 
 * @param  string $string
 * @return null
 */
function display(string $string, string $color)
{
    echo ('<p style="color: ' . $color . '">' . $string . '</p>');
}


$color = 'black';
//クッキーに格納された情報を取得
if (isset($_COOKIE['main_color'])) {
    $color = $_COOKIE['main_color'];
}

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>taskCookieImplement</title>
    </head>
    <body>
        <?php display('とことん調べる！それがスキルアップの秘訣！！', $color); ?>
        <button onclick="location.href='taskCookieSetColor.php?color=blue'">
            青
        </button>
        <button onclick="location.href='taskCookieSetColor.php?color=red'">
            赤
        </button>
        <button onclick="location.href='taskCookieSetColor.php?color=green'">
            緑
        </button>
        <button onclick="location.href='taskCookieSetColor.php'">
            クリア
        </button>
    </body>
</html>
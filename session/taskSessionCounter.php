<?php

/**
 * 表示を行う
 * 
 * @param  string $string
 * @return null
 */
function display(string $string)
{
    echo ('<p>' . $_SESSION['count'] . $string . '</p>');
}

session_start();
if ($_GET['clear'] == 1) {
    $_SESSION['count'] = 1;
} elseif (isset($_SESSION['count'])) {
    $_SESSION['count']++;
} else {
    $_SESSION['count'] = 1;
}

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>taskSessionCounter</title>
    </head>
    <body>
        <?php display( '回目のアクセスです。'); ?>
        <button onclick="location.href='taskSessionCounter.php?clear=0'">
            更新
        </button>
        <button onclick="location.href='taskSessionCounter.php?clear=1'">
            クリア
        </button>
    </body>
</html>

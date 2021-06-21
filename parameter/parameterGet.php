<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskParameter</title>
</head>
<body>
    <p><?php echo('回答を<p>タグで囲み、回答を出力してください。'); ?></p>
    <p><?php echo('回答例: 1 + 1 = ' . (1 + 1) . 'です。'); ?></p>

    <!-- 課題1 -->
    <?php echo 'str1は、'.$_GET['str1'].'です。'; ?><br />
    <?php echo 'str2は、'.$_GET['str2'].'です。'; ?><br />
    <?php echo 'str3は、'.$_GET['str3'].'です。'; ?>


</body>
<body>
</body>
</html>

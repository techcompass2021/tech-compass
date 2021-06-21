<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskCalc</title>
</head>
<body>

    <p><?php echo((1 + 3) * 5); ?></p>

    <p><?php echo(round(22 / 3, 3));?></p>

    <p><?php echo(ceil(22 / 3)); ?></p>

    <p><?php echo(floor(22 / 3)); ?></p>

    <p>
        <?php 
            $number = round(5 / (6 * 6), 1);

            echo( $number . "%" );
        ?>
    </p>

</body>
<body>
</body>
</html>
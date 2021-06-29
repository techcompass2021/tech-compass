<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskHandOver</title>
</head>
<body>

    <h1>課題1</h1>
    <?php 
        function divideQuarter (int $int) : int {

            $int /= 4;

            return $int;
        }
    ?>

    <?php $int = 2000; ?>
    <p><?php echo ("{$int}を4で割った値は" . divideQuarter($int) . "です。"); ?></p>



    <h1>課題2</h1>
    <?php 
        function divideQuarterReference (int &$int) {

            $int /= 4;

        }

        $int2 = 1000; 
        divideQuarterReference($int2);
    ?>

    <p><?php echo ("1000を4で割った値は{$int2}です。"); ?></p>


</body>
</html>
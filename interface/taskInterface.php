<?php
require('Slime.php');
require('Drakiy.php');
require('EnemyGroup.php');

$slimeA = new Slime ('スライムA');
$slimeB = new Slime ('スライムB');
$drakiy = new Drakiy ('ドラキー');

$enemyGroupArray = [

    'slimeA' => [
        $slimeA->getName(),
        $slimeA->getAttackMessage(),
    ],
    'slimeB' => [
        $slimeB->getName(),
        $slimeB->getAttackMessage(),
    ],
    'drakiy' => [
        $drakiy->getName(),
        $drakiy->getAttackMessage(),
    ],

];

$enemyGroup = new EnemyGroup ($enemyGroupArray);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskInterface</title>
</head>
<body>

    <p><?php $enemyGroup->encount(); ?></p>
    <p><?php echo $slimeA->getEncountMessage(); ?></p>
    <p><?php echo $slimeB->getEncountMessage(); ?></p>
    <p><?php echo $drakiy->getEncountMessage(); ?></p>
    <p><?php $enemyGroup->attack(); ?></p>

</body>
</html>
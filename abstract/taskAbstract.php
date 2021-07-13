<?php

require('Hero.php');
require('Brave.php');
require('Witch.php');
require('Priest.php');
require('Playman.php');
require('Party.php');

$brave = new Brave('ようこ', '女', '勇者', 24, 6, 13, 8);
$witch = new Witch('りな', '女', '魔法使い', 16, 11, 5, 4);
$priest = new Priest('たかし', '男', '僧侶', 18, 8, 9, 6);
$playman = new Playman('みつや', '男', '遊び人', 16, 7, 7, 7);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskAbstract</title>
</head>
<body>

<p><?php $party = new Party($brave); ?></p>

<p><?php echo $party->addHero($witch); ?></p>

<p><?php echo $party->addHero($priest); ?></p>

<p><?php echo $party->addHero($playman); ?></p>

<p><?php echo $party->addHero($playman); ?></p> 

<?php $party->allHeroAttack(); ?>


</body>
</html>
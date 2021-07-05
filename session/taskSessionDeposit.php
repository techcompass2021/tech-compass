<?php
$sum = 0;

session_start();
if (isset($_POST['clear'])) {
    unset($_SESSION['sum']);
    $sum = 0;
} elseif (isset($_POST['money'])) {
    if ($_POST['money'] != '') {
        $_SESSION['sum'] += $_POST['money'];
        $sum = $_SESSION['sum'];
    } else {
        $sum = 0;
    }
} 
?>

<!doctype html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>taskSessionDeposit</title>
    </head>
    <body>
        <form action="taskSessionDeposit.php" method="post">
            <div class="content">
                <div>現在の貯金額は、<span style="color:blue;"><?php echo $sum; ?>円</span>です。</div>
                <input type="text" name="money" class="money" />円
                <div class="btnArea">
                    <input type="submit" name="save" value="貯金" />
                    <input type="submit" name="clear" value="クリア" />
                </div>
            </div>
        </form>
    </body>
</html>
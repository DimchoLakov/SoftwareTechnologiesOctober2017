<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php

if (isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['num3'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $num3 = intval($_GET['num3']);
    $nums = [$num1, $num2, $num3];
    $count = 0;
    foreach ($nums as $num) {
        if ($num < 0) {
            $count++;
        }
        if ($num === 0) {
            echo "Positive";
            return;
        }
    }
    if ($count % 2 === 0) {
        echo "Positive";
    } else {
        echo "Negative";
    }
}
?>
<form>
    X: <input type="text" name="num1" value="<?= isset($_GET['num1']) ? $_GET['num1'] : 0 ?>"/>
    Y: <input type="text" name="num2" value="<?= isset($_GET['num2']) ? $_GET['num2'] : 0 ?>"/>
    Z: <input type="text" name="num3" value="<?= isset($_GET['num3']) ? $_GET['num3'] : 0 ?>"/>
    <input type="submit"/>
</form>
</body>
</html>
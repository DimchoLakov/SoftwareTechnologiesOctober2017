<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    <?php
    $value1 = 0;
    $value2 = 0;
    ?>
    N: <input type="text" name="num1" value="<?= $value1 ?>"/>
    M: <input type="text" name="num2" value="<?= $value2 ?>"/>
    <input type="submit"/>
</form>

<?php

if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $value1 = $num1;
    $value2 = $num2;
    if ($num1 > $num2) {
        echo $num1 / $num2;
    } else {
        echo $num1 * $num2;
    }
}

?>

</body>
</html>
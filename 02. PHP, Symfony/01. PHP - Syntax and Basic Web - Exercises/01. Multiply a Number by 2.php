<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>

<?php
$result = 0;
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);
    echo $num * 2;
    $result = $num;
}
?>
    <form>
        N: <input type="text" name="num" value="<?= $result ?>"/>
        <input type="submit" />
    </form>
</body>
</html>
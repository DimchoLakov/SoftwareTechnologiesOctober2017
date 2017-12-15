<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>

<?php

if (isset($_GET['num'])) {

    $n = intval($_GET['num']);

    $sum = 0;
    $fibPrevious = 0;
    $fibNext = 1;

    for ($i = 1; $i <= $n; $i++) {
        $sum = $fibNext + $fibPrevious;
        $fibNext = $fibPrevious;
        $fibPrevious = $sum;
        echo "$sum ";
    }
}

?>

</body>
</html>
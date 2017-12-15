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

        $previous = 0;
        $next = 1;
        $last = 0;
        $sum = 0;

        for ($i = 1; $i <= $n; $i++) {
            $sum = $last + $previous + $next;
            $next = $previous;
            $previous = $last;
            $last = $sum;
            echo "$sum ";
        }
    }

    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>

<?php
$color = 0;
for ($row = 0; $row < 255; $row += 51) {
    for ($col = 0; $col < 10; $col++) {
        echo "<div style='background-color: rgb($color, $color, $color)'></div>";
        $color += 5;
    }
    $color++;
    echo "<br/>";
}

?>

</body>
</html>
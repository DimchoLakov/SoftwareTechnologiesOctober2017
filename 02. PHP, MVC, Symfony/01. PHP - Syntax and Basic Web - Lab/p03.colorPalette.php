<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Color Palette</title>
    <style>div {
            display: inline-block;
            width: 150px;
            padding: 2px;
            margin: 5px;
        }
    </style>
</head>
<body>

<?php
for ($r = 0; $r <= 255; $r += 51) {
    for ($g = 0; $g <= 255; $g += 51) {
        for ($b = 0; $b <= 255; $b += 51) {
            echo "<div style='background:rgb($r, $g, $b)'>rgb($r, $g, $b)</div>";
        }
    }
}
?>

</body>
</html>
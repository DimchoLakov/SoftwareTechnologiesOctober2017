<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form>
    <div>First Number:</div>
    <input type="number" name="num1"/>
    <div>Second Number:</div>
    <input type="number" name="num2"/>
    <div><input type="submit"/></div>
</form>

<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = filter_var($_GET['num1']);
    $num2 = filter_var($_GET['num2']);
    $result = $num1 + $num2;
    echo "$num1 + $num2 = $result";
}
?>

</body>
</html>
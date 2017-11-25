<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
$capitalCaseWords = "";
if (isset($_GET['text'])) {
    $input = $_GET['text'];
    $splittedInput = preg_split("/\W+/", $input);
    $capitalCaseWords = implode(", ", array_filter($splittedInput, function ($w){
        return $w == ctype_upper($w) && $w !== "";
    }));
}
?>

<form>
    <textarea name="text" rows="10"><?= $capitalCaseWords ?></textarea>
    <br>
    <input type="submit" value="Extract"/>
</form>


</body>
</html>
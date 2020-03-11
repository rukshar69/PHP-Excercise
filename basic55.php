<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>
<form action="basic55.php" method="post">
    <input type="number" name="number1">
    <input type="number" name="number2">
    <input type="number" name="number3">
    <input type="number" name="number4">
    <input type="number" name="number5">
    <input type="number" name="number6">
    <input type="submit"><br>
</form>
<?php
$n1 = $_POST["number1"];$n2 = $_POST["number2"];$n3 = $_POST["number3"];
$n4 = $_POST["number4"];$n5 = $_POST["number5"];$n6 = $_POST["number6"];
$numbers = array();
array_push($numbers, $n1);array_push($numbers, $n2);
array_push($numbers, $n3);array_push($numbers, $n4);
array_push($numbers, $n5);array_push($numbers, $n6);
print_r($numbers);
echo "<br>";

rsort($numbers);
$reverse = array_reverse($numbers,true);
print_r($reverse)
?>
</body>

</html>

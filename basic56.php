<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>
<form action="basic56.php" method="post">
    <input type="number" name="x1"><input type="number" name="y1"><br>
    <input type="number" name="x2"><input type="number" name="y2"><br>
    <input type="number" name="x3"><input type="number" name="y3"><br>
    <input type="number" name="x4"><input type="number" name="y4"><br>
    <input type="submit"><br>
</form>
<?php
$x1 = $_POST["x1"];$y1 = $_POST["y1"];
$x2 = $_POST["x2"];$y2 = $_POST["y2"];
$x3 = $_POST["x3"];$y3 = $_POST["y3"];
$x4 = $_POST["x4"];$y4 = $_POST["y4"];

$line1Slope = INF;
if($x2 - $x1 != 0.0){
    $line1Slope = ($y2- $y1)/($x2-$x1);
}
$line2Slope = INF;
if($x4 - $x3 != 0.0){
    $line2Slope = ($y4- $y3)/($x4-$x3);
}
echo $line1Slope == $line2Slope? 'the 2 lines are parallel':'the 2 lines are NOT parallel';
echo "<br>";
?>
</body>

</html>

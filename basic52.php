<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>
<form action="basic52.php" method="post">
    <input type="number" name="number">
    <input type="submit"><br>
</form>
<?php
$n = $_POST["number"];

$a = array_fill(0,1000000, true);
$a[0] = $a[1] = false;

for($i=2; $i*$i < 1000000; $i++){
    if($a[$i]){
        for($j = $i*$i; $j<1000000;$j += $i){
            $a[$j] = false;
        }
    }
}
$sum = array_fill(0,1000000,0);
for($i =1;$i<1000000;$i++){
    $sum[$i] += $sum[$i-1];
    if($a[$i]) {
        $sum[$i]++;
    }
}

echo "Number of prime numbers which are less than or equal to $n: ";
echo $sum[$n] . "\n";
?>
</body>

</html>

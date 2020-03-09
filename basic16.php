<?php
$fname = basename($_SERVER['PHP_SELF']);
$lineCount = count(file($fname));
echo "The file has $lineCount lines in $fname<br>";
?>

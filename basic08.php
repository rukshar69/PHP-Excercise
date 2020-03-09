<?php
$webAddr = "https://www.w3resource.com/php-exercises/php-basic-exercises.php";
$dict = parse_url($webAddr);
$scheme = $dict['scheme'];
$host = $dict['host'];
$path = $dict['path'];
echo "$scheme<br>";
echo "$host<br>";
echo "$path<br>";
?>

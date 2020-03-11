<?php
$file = fopen("test.txt", "w") or die("unable to open file");
$txt = "php exercises"."<br>";
fwrite($file,$txt);
$txt = "from"."<br>";
fwrite($file,$txt);
$txt = "w3resources"."<br>";
fwrite($file,$txt);
fclose($file);
echo  "Size of file: ".filesize("test.txt")."<br>";

?>

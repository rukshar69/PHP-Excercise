<?php
$fname = basename($_SERVER['PHP_SELF']);
$modified = filemtime($fname);
echo "last modified ".date("l, dS F, Y, h:ia", $modified)."<br>";
?>

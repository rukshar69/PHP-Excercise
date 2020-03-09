<?php
$mainText = 'PHP Tutorial';
$replacedText = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$mainText);
echo $replacedText;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>

</head>

<body>

<form action="basic04.php" method="post">
    <input type="text" name="name"><br>
    <input type="submit">
</form>
<?php
$txt = $_POST["name"];
echo "$txt<br>";
?>

</body>

</html>



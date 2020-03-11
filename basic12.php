<?php
$email = 'ruksasdfdsfasdfhmed78@gml.com';
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo  "valid email";
}
else{
    echo "invalid email";
}
?>

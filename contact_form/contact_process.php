<?php
$to = "aw643@cornell.edu";
$name = $_POST['name'];
$message = $_POST['message'];
$from = $_POST['email'];
$headers = "From:" . $from;
mail($to,$name,$message,$headers);
echo "Mail Sent.";
?>

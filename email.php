<?php
$to = "mayugarule20@gmail.com";
$subject = "New Topic";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

/* More headers */
$headers .= 'From: info@studentstutorial.com' . "\r\n";
$headers .= 'Cc: ' . "\r\n";

mail($to,$subject,$message,$headers);
echo "success";
?>
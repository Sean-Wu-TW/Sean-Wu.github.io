
<?php

$to = "sean840411@gmail.com";
$name = $_POST['$name'];
　$subject=$_POST['$subject'];
　$message=$_POST['$message'];
　$headers = 'From: example' . "\r\n" .
    'Reply-To: sean840411@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
　mail($to,$subject,$message,$headers);　
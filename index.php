<?php
$ime -$POST['ime'];
$visitor_email= $_POST['email'];
$Poruka = $_POST['Poruka'];

$email_form ='rade.jasenovcanin@yahoo.com';

$email_subject = "New form submission";

$email_body= "User Name: $name.\n".
               "User Email: $visitor_Email.\n";


$to ="rade.jasenovcanin@yahoo.com";   

$headers ="form: $email_form \r\n";

$headers.="Replay-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: index.html");
?>
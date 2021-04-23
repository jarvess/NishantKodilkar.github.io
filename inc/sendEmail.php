<?php
//get data from form

$name = $_POST['contactName'];
$email= $_POST['contactEmail'];
$subject= $_POST['contactSubject'];
$message= $_POST['contactMessage'];
$to = "nishant.kodilkar216@siesgst.ac.in";
$subject = "Mail From portfolio_suggestion_box";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $subject . "\r\n Message =" . $message ;
$headers = "From: noreply@portfolio.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>
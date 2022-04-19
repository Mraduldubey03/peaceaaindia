<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "info@peaceaaindia.com";
$sub = "Mail From PeaceaaIndia website";
$txt =" \n Name: $name \n Email: $email \n Subject: $subject \n Message: $message";
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: digitalmradul@gmail.com";
if($email!=NULL){
    mail($to,$sub,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
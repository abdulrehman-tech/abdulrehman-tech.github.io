<?php
//get data from form  
$name = $_POST['your-name'];
$email= $_POST['your-email'];
$message= $_POST['your-message'];
$subject= $_POST['your-subject'];
$to = "rockxabdul101@gmail.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
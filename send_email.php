<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "dmitry.blb5@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: my website" . "\r\n" .

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank_you.html");
?>
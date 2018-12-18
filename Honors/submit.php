<?php
$name = $_POST['name'];
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$service = $_POST['service'];
$questions = $_POST['questions'];

echo $name ."'s Shipping Address: <br><br>";
echo $name . "<br>" . $a1 . "<br>" . $a2 . "<br>" . $city . ", " . $state . "<br" . $zip . "<br>";

$myEMAIL = "BeautyByJ@gmail.com";
$subject = "New Client Information Request";
$body = "Information on the " . $service . " service has been requested by " . $name . ".<br>Email: " . $email;
$body = $body . "Additional Questions: " . $comments;
echo $body;

switch($_POST['service']){
case 'glam':
 echo "<br> The full glam package costs $45.00.";
break;
case 'natural':
 echo "<br> The natural glam package costs $30.00.";
break;
case 'lash':
 echo "<br> A last application package costs $10.00.";
break;
default:
echo "Error.";
}
?>

if (mail($myEmail, $subject, $body)) {
  echo "<script language='javascript'>alert('E-mail sent!');window.location = 'http://BeautyByJ@gmail.com/thankyou.html';</script>";

 } else {
  echo "<script language='javascript'>alert('Email failed!');window.location = 'http://BeautyByJ@gmail.com/email_error.html';</script>";
 }
?>
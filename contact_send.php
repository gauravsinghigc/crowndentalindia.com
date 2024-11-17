<?php
  require 'text.php'; 
  $full_name = $_REQUEST['full_name'] ;
  $phone_number = $_REQUEST['phone_number'] ;
  $email_id = $_REQUEST['email_id'] ;
  $message = $_REQUEST['message'] ;
  $subject = $_REQUEST['subject'];
  $booking_date = date("d M, Y");
  $receive = "dr.crowndentalcare@gmail.com";
  
require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");

$mail = new PHPMailer();

$mail->IsSMTP();
//$mail->SMTPDebug=2;                                      // set mailer to use SMTP
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.hostinger.com";
$mail->Port = 465;          // specify main and backup server
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "noreply@navix.in";  // SMTP username
$mail->Password = "Navix@1800"; // SMTP password

$mail->From = "noreply@navix.in";
$mail->FromName = "Contact @ Crown dental";
$mail->AddAddress("$receive", "Crown Dental");
$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Crown Dental : $subject";
$mail->Body    = "
<h3>$full_name wants to contact Crown Dental. They fill contact form on website. Details are below;</h3><br>

<h3>Contact Details:</h3>
<p>
Full Name :  $full_name<br>
Phone Number : $phone_number<br>
Email-id  : $email_id<br>
Subject : $subject<br>
Message/Question : $message</p>
<br><br>

<img src='https://crowndentalindia.com/images/resources/crown-dental-logo.jpg' style='width:45%;'>
<p>Crown Dental  
<br> DR. Ruby Shah Garg - BDS, MDS (Prosthodontics)
<br>  Phone number : $phone 
<br> Website : www.crowndentalindia.com
<br> Address : SHOP NO 190, Sector 9, Huda Market, Faridabad Haryana - 121006 India.
<br> Location : <a href='https://g.page/crown-dental-faridabad?share'>Open in Map</p>
<hr>
<p style='font-size:10px;'> Contacted by $full_name at $booking_date</p> 

";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. 
";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}
header("location: response.php?sent=success");




?>
<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];
//$image = $_POST['image'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'plugins/PHPMailer/src/Exception.php';
require 'plugins/PHPMailer/src/PHPMailer.php';
require 'plugins/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;
//$mail->Port = 465;

$mail->Username = "recognition.hostconcert@gmail.com";
$mail->Password = "uqvozehafwxyczzx";

$mail->setFrom($email, $name);
$mail->addAddress("recognition.concert@gmail.com", "Sid");

$mail->Subject = $subject;

//$image = file_get_contents($_SERVER['DOCUMENT_ROOT']."/Recognition M&T/location-info.php", true);
//$image = "<html><head></head><body>";
//$image .= "</body></html>";   
$image = 'Images/recognition_logo.jpg';
$cid=$mail->AddEmbeddedImage ($image, "recognition");

//$image = 'MIME-Version: 1.0' ."\r\n";
//$image = 'Content-type: text/html; charset=iso-8859-1'. "\r\n";

//$image     = "<html><br>";
//$image    .= "<head><title>Test Mail</title></head>";
//$image    .= "<body>";
//$image    .= "<img src=\"Images/recognition_logo.jpg\" width=\"100%\">"; 
//$image    .= "</body>";
//$image    .= "</html>";

$mail->Body = "Recognition Concerts Hosting Form Details\n"
            .'Full Name: '.$name."\n"
            .'Email: '.$email."\n"
            .'Phone Number: '.$number."\n\n"
            .$message;
//$sent =@mail($image);
$mail->send();
//echo "Email Sent";
include ('Images/hostingformMailSent.php');

//try
//{
 //   $mail->send();
  //  echo "Email Sent";
    //header("Location: sent.html");
//}
//catch(Exception $e)
///{
//echo "Mail Not Sent";
//}

?>
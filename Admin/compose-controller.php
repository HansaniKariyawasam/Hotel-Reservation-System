<?php
error_reporting(E_STRICT);

require("PHPMailer_5.2.0/class.phpmailer.php");


$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAutoTLS = false;
$mail->SMTPDebug = 2;
$mail->IsHTML(true);



// As this email.php script lives on the same server as our email server
// we are setting the HOST to localhost
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = gethostbyname('smtp.gmail.com');      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "oshanmen@gmail.com";  // GMAIL username
$mail->Password   = "mendiskanila";            // GMAIL password
$mail->SMTPKeepAlive = true;
$mail->Mailer = "smtp";


// $email is the user's email address the specified
// on our contact us page. We set this variable at
// the top of this page with:
// $email = $_REQUEST['email'] ;
$mail->SetFrom($_POST['emailAddress'],"user");
$mail->AddReplyTo($_POST['emailAddress'],"User");

$mail->Subject    = $_POST['subject'];

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($_POST['message']);

$mail->AddAddress("hansanikariyawasam33@gmail.com", "Hansani Kariyawasam");



if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
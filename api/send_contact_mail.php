<?php

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
include_once 'email_config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//var_dump($_POST); exit('ends');
//}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sub = $_POST['sub'];
$msg = $_POST['msg'];
$subject = "Getting New Enquary from Visitor :" . date('Y-m-d H:i:s');

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();

    $mail->Host = $host_name;

    $mail->SMTPAuth = $smtp_auth;

    $mail->Username = $smtp_username;
    
    $mail->Password = $smtp_password;  

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port = $smtp_port;
    
    //$mail->SMTPDebug = 2;

    //$mail->Debugoutput = 'html';

    $mail->setFrom($setFrom_email, $setFrom_name);

    $mail->addAddress($admin_email);

    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);

    $mail->Subject = $subject;

    $mail->Body = "

    <h3>New Contact Form Enquery</h3>

    <b>Name :</b> {$name}<br>

    <b>Email :</b> {$email}<br>
    
    <b>Phone Number :</b> {$phone}<br>

    <b>Subject :</b> {$sub}<br>
    
    <b>Message :</b>

    {$msg}

    ";

    if($mail->send()){

        echo "<br><span style='color:white'>
                <h4>Thank You for Your Query!</h4>
              <p>Your query/enquery/feedback has been received. I will reach out to you within 48 hours to discuss next steps.</p>
              </span>";

    }else{

        echo "<br><span style='color:red'>
                Mail Failed
              </span>";

    }

}catch(Exception $e){

    echo $mail->ErrorInfo;

}

<?php

    define('myEmail', 'phpmailer04@gmail.com');
    define('myPass', 'phpmailer12345');

    require 'mailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();                             // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                    // Enable SMTP authentication
    $mail->Username = myEmail;                 // SMTP username
    $mail->Password = myPass;                           // SMTP password
    $mail->SMTPSecure = 'tls';   // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;    
    $mail->setFrom(myEmail, 'Notification');
    $mail->addReplyTo(myEmail);
    $mail->isHTML(true);
    $mail->addAddress('shehzad.mohid123@gmail.com')
    $mail->Subject = $_POST['subject'];
    $mail->Body    = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium error exercitationem illo beatae accusantium repudiandae accusamus natus, eveniet nostrum ab.';

    if(!$mail->send()) {
        echo "something went wrong";
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else {
        echo "sent";
    }

?>
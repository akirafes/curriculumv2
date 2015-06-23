<?php
    require_once "../app/actions/constantes.php";
    require_once "../app/actions/funciones.php";
    require "vendors/phpmailer/PHPMailerAutoload.php";

    $data = json_decode(file_get_contents('php://input'), true);

    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'mail@fer.cc';                 // SMTP username
    $mail->Password = 'F3rn4nd0!';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
    $mail->Port = 587;
    $mail->SMTPDebug = false;

    $mail->From = $data['email'];
    $mail->FromName = $data['name'];
    $mail->addAddress('akira_fes@hotmail.com', 'Fernando Espinosa');     // Add a recipient
   // $mail->addAddress('ellen@example.com');               // Name is optional
   //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

   // $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Contact From Fer.cc';
    $mail->Body    = "mail:".$data['email']."<br>Comments:".$data['comments'];
   // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        $resp['codigo'] = "error";
        $resp['msg'] = 'Mailer Error: ' . $mail->ErrorInfo;
        //echo 'Message could not be sent.';
        //echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        $resp['codigo'] = "ok";
        $resp['msg'] = 'Message has been sent';
       // echo 'Message has been sent';
    }

    echo json_encode($resp);
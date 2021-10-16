<?php

if (isset($_POST['fileDataURI'])) {

               $pdfdoc         = $_POST['fileDataURI'];

           $b64file        = trim( str_replace( 'data:application/pdf;base64,', '', $pdfdoc ) );
           $b64file        = str_replace( ' ', '+', $b64file );
           $decoded_pdf    = base64_decode( $b64file );
           //file_put_contents( $attachment, $decoded_pdf );

           $mail = new PHPMailer;
           $mail->setFrom( 'xxx@xxx.hr', 'website' );
           $mail->addAddress( 'xxx@gxxx.com', 'OdedTa' );
           $mail->Subject  = 'First PHPMailer Message';
           $mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
           $mail->addStringAttachment($decoded_pdf, "nalog.pdf");
           $mail->isHTML( true );
           $mail->send();

 ?>

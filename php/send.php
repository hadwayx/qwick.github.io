<?php

    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';
    require 'phpmailer/Exception.php';

    $userLogin = $_POST['userLogin'];

    // $host = 'qwick';
    // $username = 'root';
    // $password = '';

    // $connect = mysqli_connect($host, $username, $password);

    // $DBQuery = "USE Users";
    // mysqli_query($connection, $DBQuery);

    // // User recovers password true
    // $Query = "SELECT * FROM Users";
    // mysqli_query($connect, $Query);

    // $Query = "UPDATE UsersData SET UserRecover=true WHERE UserLogin=$userLogin";

    // mysqli_close($connect);

    if ($userLogin)
    {
        // create a new object
        $mail = new \PHPMailer\PHPMailer\PHPMailer();
        // configure an SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'polishkoanton@gmail.com';
        $mail->Password = 'gnjy xmuf xaow wmxf';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('test@gmail.com', 'Qwick');
        $mail->addAddress(strval($userLogin));
        $mail->Subject = 'Recover password';
        // Set HTML 
        $mail->isHTML(TRUE);
        $mail->Body = 'Click on this link: <a href="http://qwick/recover-password.html">http://qwick/recover-password.php<a>';
        $mail->AltBody = ''; 
        // add attachment 
        // just add the '/path/to/file.pdf'
        $attachmentPath = './confirmations/yourbooking.pdf';
        if (file_exists($attachmentPath)) {
            $mail->addAttachment($attachmentPath, 'yourbooking.pdf');
        }

        // send the message
        if(!$mail->send()){
            echo 'Message could not be sent.'; 
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else { 
            echo 'Message has been sent';
        }
    }

?>
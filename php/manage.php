<?php
    require_once "../vendor/autoload.php";
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $boutton=$_POST['boutton'];  
    if(isset($boutton)){
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = '2c51ce0180e3fa';
        $phpmailer->Password = 'c120c4a2e4d6f0';

        $mail=$_POST['email'];
        
        $to="salifououzerou25@gmail.com";
        $subject="Test";
        $message="J'ai visité votre site web et remarqué qu'elle est en maintenace. Veuillez me contacter dès que possible. Jon SNOW";

        // Expéditeur
        $phpmailer->setFrom($mail, 'Calla');
        // Destinataire dont le nom peut également être indiqué en option
        $phpmailer->addAddress('salifouzerou25@gmail.com', 'nom');

        if(isset($mail) and !empty($mail)){
            $phpmailer->isHTML(true);
            // Betreff
            $phpmailer->Subject = 'Test';
            // HTML-Inhalt
            $phpmailer->Body = "J'ai visité votre site web et remarqué qu'elle est en maintenace. Veuillez me contacter dès que possible. Jon SNOW";
            $phpmailer->send();
            echo "E-mail bien envoyé!";
            
        }else{
            $msg="<div class='invalid-feedback mt-2' data-sb-feedback='email:required'>Un email est requis.</div>";
        }
    }

    if(isset($msg) and !empty($msg)){
        echo $msg;
    }
?>
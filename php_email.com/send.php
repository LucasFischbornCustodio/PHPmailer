<?php

    require 'mailer/PHPMailerAutoload.php';
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
//dar require dos arquivos da pasta source?? php mailer smtp exeption
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

    

    if(isset($_POST["send"])){
        $mail = new PHPMailer(true);

        $mail-> isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAauth = true;
        $mail->Username = 'exercmail@gmail.com';
        $mail->Password = 'hdggoohjhwlrvbjc';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('exercmail@gmail.com');

        $mail->addAdress($_POST["email"]);

        $mail->isHTML(true);

        $mail->Assunto = $_POST["assunto"];
        $mail->Text = $_POST["mensagem"];  

        $mail->send();

        echo

        "
        <script>
        alert('Envio bem sucedido');
        </script>
        document.location.href = 'index.php';
        ";
    }
?>
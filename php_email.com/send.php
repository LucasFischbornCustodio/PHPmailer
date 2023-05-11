<?php

    
    require_once 'PHPMailer/src/Exception.php';
    require_once 'PHPMailer/src/PHPMailer.php';
    require_once 'PHPMailer/src/SMTP.php';
//dar require dos arquivos da pasta source?? php mailer smtp exeption
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    

    if(isset($_POST["enviar"])){
        $mail = new PHPMailer(true);

        $mail-> isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'exercmail@gmail.com';
        $mail->Password = 'hdggoohjhwlrvbjc';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('exercmail@gmail.com');

        $mail->addAddress($_POST["email"]);

        $mail->isHTML(true);

        $mail->Subject = $_POST["assunto"];
        $mail->Body = $_POST["mensagem"];  

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
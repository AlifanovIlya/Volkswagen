<?php

$opinion = $_POST['opinion'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

        require 'phpmailer/class.phpmailer.php';
        require 'phpmailer/class.smtp.php';
        $mdemail = md5($email);
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->Host = 'smtp.mail.ru';
        $mail->SMTPAuth = true;
        $mail->Username = ''; //login
        $mail->Password = ''; //password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('vlkwg@mail.ru'); 
        $mail->addAddress("");
        //$mail->addAddress("");
        //$mail->addAddress("");
        //$mail->addAddress("");
        //$mail->addAddress("");   //куда 
        $mail->isHTML(true);
        $mail->Subject = 'Оценка обслуживания'; 
        $mail->Body = " 
        Оценка: $opinion<br>
        Имя: $name<br>
        Телефон: $phone<br>
        Отзыв: $message
        ";

// Результат
        if (!$mail->send()) {
            echo ' ';
        } else {
            echo ' ';
        }

?>

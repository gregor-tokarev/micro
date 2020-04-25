<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class Contacts extends Controller {
    public function index() {
        $this->view('contacts');
    }

    public function sendLetter() {
        $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
        $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_STRING));
        $age = trim(filter_var($_POST['age'], FILTER_SANITIZE_STRING));
        $massage = trim(filter_var($_POST['massage'], FILTER_SANITIZE_STRING));

        $mail = new PHPMailer(true);

        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.mail.ru';
        $mail->SMTPAuth = true;
        $mail->Username = 'zipperz@list.ru';
        $mail->Password = '5WGKzXCxdPSzR!6';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('zipperz@list.ru');
        $mail->addAddress('zippper123915@gmail.com');


        $mail->isHTML(true);
        $mail->Subject = 'Mail';
        $mail->AltBody = '';
        $mail->Body    = $name . ' ' . $age .' '. $massage;
        $mail->send();
        echo 'Message has been sent';
    }
}
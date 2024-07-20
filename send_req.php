<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'mbiyber@gmail.com'; // Your Gmail address
        $mail->Password = 'seutjpzrhbxababv';  // Your Gmail App Password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('mbiyber@gmail.com', 'Epic Car Wash'); // Your email address and name
        $mail->addAddress('mbiyber@gmail.com'); // Recipient's email address

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Newsletter Subscription';
        $mail->Body    = "Name: $name<br>Email: $email<br>Message: $message";

        $mail->send();
        $_SESSION['notification'] = 'Message has been sent successfully.';
    } catch (Exception $e) {
        $_SESSION['notification'] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
} else {
    $_SESSION['notification'] = 'Invalid request.';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
?>

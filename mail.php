<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';
if (isset($_POST["submit"])){
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        if (isset($_POST["sujet"]) && isset($_POST["nom"]) && isset($_POST["prenom"])
            && isset($_POST["email"]) && isset($_POST["gender"])
            && isset($_POST["company"])
            && isset($_POST["telephone"]) && isset($_POST["message"])){

            $mail->SMTPDebug = 4;                                 // Enable verbose debug output
            $mail->Mailer = "smtp";                                 // Set mailer to use SMTP
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'corp.no@gmail.com';                 // SMTP username
            $mail->Password = 'c0R|>0r4t1oN';                           // SMTP password
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;

            //Recipients
            $mail->setFrom($_POST["email"], $_POST["nom"] . " " . $_POST["prenom"]);
            $mail->addAddress('corp.no@gmail.com', "EMILY");     // Add a recipient

            //Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $_POST["sujet"];
            $mail->Body    = $_POST["message"];

            $mail->send();
            echo 'Message has been sent';
        }
    } catch (Exception $e) {
        echo 'Message could not be sent.'."<br>";
        echo $mail->ErrorInfo;
    }
}

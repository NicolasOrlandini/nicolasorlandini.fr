<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
if (isset($_POST["submit"])){
    $mail = new PHPMailer();                              // Passing `true` enables exceptions
    try {
        if (isset($_POST["sujet"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["message"]) && isset($_POST["gender"])
            && isset($_POST["demo-2"]) && isset($_POST["telephone"]) && !empty($_POST["plateforme"]) && isset($_POST["company"])
        ){

            //$mail->SMTPDebug = 4;                                 // Enable verbose debug output
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
            $mail->setFrom($_POST["email"],$_POST["gender"] . " " . strtoupper($_POST["nom"]) . " " . $_POST["prenom"]);
            $mail->addAddress('nicolas.orlandini@outlook.fr');     // Add a recipient

            //Attachments
            //$mail->addAttachment($_POST["attachment"]);         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "Sujet: " . $_POST["sujet"];
            $chips = $_POST["demo-2"];
            $plateforme = "";
            $message = "";
            $telephone = $_POST["telephone"];
            foreach ($_POST["plateforme"] as $plateformes) {
                $plateforme .= $plateformes . "/";
            }
            $message .= "Explication du projet: " . $_POST["message"] . "\n"
                . "Plateforme(s) choisie(s): " . rtrim($plateforme, '/') . "\n"
                . "Les technologies à utiliser: " . $chips . "\n"
                . "Coordonnées du contact: " . $telephone;
            $mail->Body = str_replace("\n", "<br>", $message);

            if($mail->send()){
                return;
            }
        }
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé." . "<br>";
    }
}

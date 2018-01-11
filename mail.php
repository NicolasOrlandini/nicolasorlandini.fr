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
            $mail->addAddress('dev.orlandini@outlook.com');     // Add a recipient

            //Attachments
            $taille = count($_FILES['attachment']['name']);
            if ($taille > 0) {
                for ($i=0; $i<$taille; $i++){
                    $tmpFilePath = $_FILES['attachment']['tmp_name'][$i];
                    if ($tmpFilePath != ""){
                        //Setup our new file path
                        $newFilePath = "./uploads/" . $_FILES['attachment']['name'][$i];

                        //Upload the file into the temp dir
                        if(move_uploaded_file($tmpFilePath, $newFilePath)) {
                            $mail -> addattachment($newFilePath, basename($_FILES["attachment"]["name"][$i]), "base64", $_FILES["attachment"]["type"][$i]);
                        }
                    }
                }
            }
            else{
                echo 'nique ta mere';
            }

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
            /*$dir = opendir($uploaddir);
            while($file == readdir($dir)){
                if(file_exists($file))
                    unlink($dir.$file);
            }
            closedir($dir);*/
        }
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé." . "<br>";
    }
}

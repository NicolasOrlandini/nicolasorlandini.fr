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

            $mail->isMail();
            //Recipients
            $mail->setFrom($_POST["email"],$_POST["gender"] . " " . strtoupper($_POST["nom"]) . " " . $_POST["prenom"], 0);
            $mail->addAddress('valentin.leon0@gmail.com');     // Add a recipient

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

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $_POST["sujet"];
            $aChips = explode(' ', $_POST["demo-2"]);
            $message = "";
            $telephone = $_POST["telephone"];
            $plateforme = "";
            foreach ($_POST["plateforme"] as $plateformes) {
                $plateforme .= $plateformes . ",";
            }

            /*$message .= "Explication du projet: " . $_POST["message"] . "\n"
                . "Plateforme(s) choisie(s): " . rtrim($plateforme, '/') . "\n"
                . "Les technologies à utiliser: " . $chips . "\n"
                . "Coordonnées du contact: " . $telephone;*/
            $message = createMail(
                strtoupper($_POST["gender"]),
                strtoupper(trim($_POST["nom"])) . " " . trim(ucfirst($_POST["prenom"])),
                trim($_POST["sujet"]), trim($_POST["message"]),
                trim($_POST["company"]), trim($_POST["email"]),
                trim($_POST["telephone"]), $plateforme, $aChips);
            $mail->Body = str_replace("\n", "<br>", utf8_encode($message));

<<<<<<< Updated upstream
            var_dump($aChips);
            var_dump($plateforme.explode(' ', $plateforme));

            if($mail->send()){
                return;
            }
=======
            if($mail->send()){
                return;
            }
            else
                echo $mail->ErrorInfo;

>>>>>>> Stashed changes
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

function createMail($civility, $person, $projectName, $textProject, $entreprise, $email, $tel, $plateforme, $chips){
    $html = '';

    $html .= $civility . " " . $person . "<br><br>";
    $projet = "<div style='text-align: center;'><span><u>" . $projectName . "</u></span><br><div style='text-align: center;'><br>" . $textProject ."</div></div><br>";
    $hr = "<br><hr><br>";
    $table = "<div style='width:100%;text-align:center'><div style='display:inline-block;'><table width='250' border='1'>".
        "<thead><td>PLATEFORMES</td><td>TECHNOLOGIES</td></thead></table></div></div>";



    $contact = "<div style='position:absolute;width:100%'><div style='vertical-align:middle;padding-bottom:5px;text-align:center;'><br><span>".
                "<u>CONTACT</u></span><br></div><br>Entreprise: " . $entreprise . "<br> E-mail: " . $email . "<br> Tel: " . $tel ." </div>";

    $html .= $projet . $hr . $table . $hr . $contact;


    return $html;
}

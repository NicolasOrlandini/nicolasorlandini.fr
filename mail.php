<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

/*$toast = "<script type='text/javascript'>$.toast({".
        "heading: 'Succès',".
        "text: 'Votre message a bien été envoyé',".
        "icon: 'success',".
        "loader: false,".
        "loaderBg: '#00B0F0',".
        "position: 'bottom-center'".
    "})</script>";*/


if (isset($_POST["submit"])){
    $mail = new PHPMailer();
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
            $mail->CharSet  = "UTF-8";
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'corp.no@gmail.com';                 // SMTP username
            $mail->Password = 'c0R|>0r4t1oN';                           // SMTP password
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 465;

            $mail->isSMTP();
            //Recipients
            $mail->setFrom($_POST["email"],$_POST["gender"] . " " . strtoupper($_POST["nom"]) . " " . $_POST["prenom"], 0);
            $mail->addAddress('valentin.leon0@gmail.com');     // Add a recipient

            //Attachments
            foreach ($_FILES['attachment']["error"] as $key => $error){
                if ($error == UPLOAD_ERR_OK){
                    $tmp_name = $_FILES["attachment"]["tmp_name"][$key];
                    $name = basename($_FILES["attachment"]["name"][$key]);
                    if(move_uploaded_file($tmp_name, "./upload/$name")){
                        $mail->addAttachment("./upload/$name", basename($_FILES["attachment"]["name"][$key]));
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
            $chips = "";
            foreach ($_POST["plateforme"] as $plateformes) {
                $plateforme .= "<tr><td>" . $plateformes ."</td></tr>";
            }
            foreach ($aChips as $chip){
                $chips .= "<tr><td>" . $chip . "</td></tr>";
            }




            $message = createMail(
                strtoupper($_POST["gender"]),
                strtoupper(trim($_POST["nom"])) . " " . trim(ucfirst($_POST["prenom"])),
                trim($_POST["sujet"]), trim($_POST["message"]),
                trim($_POST["company"]), trim($_POST["email"]),
                trim($_POST["telephone"]), $plateforme, $chips);
            $mail->Body = str_replace("\n", "<br>", utf8_encode($message));


            if($mail->send()){
                return;
            }
            else
                echo $mail->ErrorInfo;

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

require 'vendor/autoload.php';

function createMail($civility, $person, $projectName, $textProject, $entreprise, $email, $tel, $plateforme, $chips){
    $html = '';

    $html .= $civility . "&nbsp;" . $person . "<br><br>";
    $projet = "<div style='text-align: center;'><span><u>" . $projectName . "</u></span><br><div style='text-align: center;'><br>" . $textProject ."</div></div><br>";
    $hr = "<br><hr><br>";
    $tablePlateforme = "<div style='display:inline-block;'><table width='250' border='1'>".
        "<thead><td>PLATEFORMES</td></thead>" . $plateforme . "</table></div>";
    $tableTechnologie = "<div style='display: inline-block;'><table width='250' border='1'>".
        "<thead><td>TECHNOLOGIES</td></thead>" . $chips . "</table></div>";

    $contact = "<div style='position:absolute;width:100%'><div style='vertical-align:middle;padding-bottom:5px;text-align:center;'><br><span>".
                "<u>CONTACT</u></span><br></div><br>Entreprise: " . $entreprise . "<br> E-mail: " . $email . "<br> Tel: " . $tel ." </div>";

    $html .= $projet . $hr . "<div style='width:100%;text-align:center;float: left;'>" . $tablePlateforme . $tableTechnologie . "</div>" . $hr . $contact;


    return $html;
}

<?php
require_once  'recaptcha.php';
$siteKey = '6LftGzgUAAAAAPIVLFDzuG0nL1e_054V-AltFU3T'; // votre clé publique
$secret = '6LftGzgUAAAAANgO8xSCE1avLBgJQKUAJPzJjPzb'; // votre clé privée
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A portfolio template that uses Material Design Lite.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>MDL-Static Website</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">>
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-pink.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="app.js"></script>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--waterfall portfolio-header">
        </header>
        <main class="mdl-layout__content">
           
            <div class="mdl-grid portfolio-max-width portfolio-contact">
                <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Contactez-moi</h2>
                    </div>
                    <div class="mdl-card__media">
                        <img class="article-image" src=" images/contact-image.jpg" border="0" alt="">
                    </div>
                    <div class="mdl-card__supporting-text">
                        <p>
                            J'aime le saucisson    
                        </p>
                        <p>
                            Surtout quand il est bon !
                        </p>
                        <form action="#" class="" method="POST">
                            <div class="mdl-selectfield mdl-js-selectfield">
                                <select id="myselect" name="myselect" class="mdl-selectfield__select">
                                    <option value=""></option>
                                    <option value="option0_value">Madame</option>
                                    <option value="option1_value">Monsieur</option>
                                </select>
                            <label class="mdl-selectfield__label" for="myselect">Civilité</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" pattern="[A-Z,a-z, ]*" type="text" id="Name">
                                <label class="mdl-textfield__label" for="Name">Nom...</label>
                                <span class="mdl-textfield__error">Letters and spaces only</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="firstname">
                                <label class="mdl-textfield__label" for="firstname">Prénom...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="Email">
                                <label class="mdl-textfield__label" for="Email">Email...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="telephone">
                                <label class="mdl-textfield__label" for="telephone">Numéro de téléphone...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="company">
                                <label class="mdl-textfield__label" for="company">Plateforme...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="subject">
                                <label class="mdl-textfield__label" for="subject">Sujet...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="company">
                                <label class="mdl-textfield__label" for="company">Entreprise...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <textarea class="mdl-textfield__input" type="text" rows="5" id="note"></textarea>
                                <label class="mdl-textfield__label" for="note">Parlez-moi de votre projet...</label>
                            </div>
                            <?php require_once 'getCaptcha.php'; ?><br><br>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
                                <input class="mdl-textfield__input" placeholder="No file chosen" type="text" id="TEXT_ID" readonly />
                                <div class="mdl-button mdl-button--icon mdl-button--file">
                                    <i class="material-icons">attach_file</i>
                                    <input type="file" name="NAME" id="ID" onchange="document.getElementById('TEXT_ID').value=this.files[0].name;" />
                                </div>
                            </div>
                            <br><br>
                            <form action="test-captcha.php" method="POST">
                                <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent btnSubmit" type="submit">
                                    ENVOYER PEDE
                                </button>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://www.google.com/recaptcha/api.js"></script>
</body>

</html>

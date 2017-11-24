<?php
require_once  'recaptcha.php';
$siteKey = '6LftGzgUAAAAAPIVLFDzuG0nL1e_054V-AltFU3T'; // votre clé publique
$secret = '6LftGzgUAAAAANgO8xSCE1avLBgJQKUAJPzJjPzb'; // votre clé privée
?>
<div class="mdl-grid portfolio-max-width portfolio-contact">
    <form action="#" class="" method="POST">
        <div class="container-civility">
            <label class="civility" for="">Civilité</label>
            <div class="">
                <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect radiobutton"
                       for = "monsieur">
                    <input type = "radio" id = "monsieur" name = "gender"
                           class = "mdl-radio__button" >
                    <span class = "mdl-radio__label">Monsieur</span>
                </label>
            </div>
            <div class="">
                <label class = "mdl-radio mdl-js-radio mdl-js-ripple-effect radiobutton" for = "madame">
                    <input type = "radio" id = "madame" name = "gender" class = "mdl-radio__button" />
                    <span class = "mdl-radio__label">Madame</span>
                </label>
            </div>
        </div><br>
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
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label plateforme">
            <label for="plateforme">Plateforme de votre projet</label>
            <div>
                <label class = "mdl-checkbox mdl-js-checkbox" for = "checkbox1">
                    <input type="checkbox" id ="checkbox1" class="mdl-checkbox__input">
                    <i class="material-icons androidColor">android</i><span class = "mdl-checkbox__label">Android</span>
                </label>
            </div>

            <div>
                <label class = "mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect"
                       for = "checkbox2">
                    <input type = "checkbox" id = "checkbox2" class = "mdl-checkbox__input">
                    <i class="material-icons iosColor">phone_iphone</i><span class = "mdl-checkbox__label">iOS</span>
                </label>
            </div>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="subject">
            <label class="mdl-textfield__label" for="subject">Sujet...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" id="company">
            <label class="mdl-textfield__label" for="company">Entreprise...</label>
        </div>
        <div>
            <div class="mdl-textfield mdl-js-textfield mdl-chipfield" id="demo-2">
                <input type="hidden" class="mdl-chipfield__input" name="demo-2" value="">
                <input class="mdl-textfield__input" type="text" id="my-input-2">
                <label class="mdl-textfield__label" for="my-input-2">Technologies</label>
            </div>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <textarea class="mdl-textfield__input" type="text" rows="5" id="note"></textarea>
            <label class="mdl-textfield__label" for="note">Parlez-moi de votre projet...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
            <input class="mdl-textfield__input" placeholder="Importez des documents" type="text" id="TEXT_ID" readonly />
            <div class="mdl-button mdl-button--icon mdl-button--file">
                <i class="material-icons">attach_file</i>
                <input type="file" name="NAME" id="ID" onchange="document.getElementById('TEXT_ID').value=this.files[0].name;" />
            </div>
        </div>
        <?php require_once 'getCaptcha.php'; ?>
        <form action="getCaptcha.php" method="POST">
            <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
            <button class="mdl-button contact mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--white-colored" type="submit">
                ENVOYER
            </button>
        </form>
    </form>
</div>

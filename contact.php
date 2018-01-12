<?php
require_once 'mail.php';
require_once 'recaptcha.php';
$siteKey = '6LfZQ0AUAAAAAE_VuY8Ayl99Cjwzpj_kX6YbtsrC'; // votre clé publique
$secret = '6LfZQ0AUAAAAAApVJfXCQ9vBr67UK_Si1GKb1UbL'; // votre clé privée
?>
<div class="mdl-grid portfolio-max-width portfolio-contact">
    <form action="#" class="" method="POST" enctype="multipart/form-data">
        <?php /*require 'getCaptcha.php'; */?>
        <div class="container-civility">
            <label class="civility" for="">Civilité</label>
            <div class="">
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect radiobutton"
                       for = "monsieur">
                    <input type = "radio" id="monsieur" name="gender"
                           class = "mdl-radio__button" value="Mr">
                    <span class = "mdl-radio__label">Monsieur</span>
                </label>
            </div>
            <div class="">
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect radiobutton" for="madame">
                    <input type="radio" id ="madame" name="gender" class="mdl-radio__button" value="Mme" />
                    <span class="mdl-radio__label">Madame</span>
                </label>
            </div>
        </div><br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" name="nom" pattern="[A-Z,a-z, ]*" type="text" id="nom">
            <label class="mdl-textfield__label" for="nom">Nom...</label>
            <span class="mdl-textfield__error">Letters and spaces only</span>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" name="prenom" type="text" id="prenom">
            <label class="mdl-textfield__label" for="prenom">Prénom...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" name="email" type="text" id="Email">
            <label class="mdl-textfield__label" for="Email">Email...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" name="telephone" type="tel" pattern="^\+?\s*(\d+\s?){8,}$" maxlength="10" id="telephone">
            <label class="mdl-textfield__label" for="telephone">Numéro de téléphone...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label plateforme">
            <label for="plateforme">Plateforme de votre projet</label>
            <div>
                <label class = "mdl-checkbox mdl-js-checkbox" for = "checkbox1">
                    <input type="checkbox" name="plateforme[]" value="android" id ="checkbox1" class="mdl-checkbox__input">
                    <i class="material-icons androidColor">android</i><span class = "mdl-checkbox__label">Android</span>
                </label>
            </div>

            <div>
                <label class = "mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect"
                       for = "checkbox2">
                    <input type="checkbox" name="plateforme[]" value="ios" id = "checkbox2" class = "mdl-checkbox__input">
                    <i class="material-icons iosColor">phone_iphone</i><span class = "mdl-checkbox__label">iOS</span>
                </label>
            </div>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" name="sujet" type="text" id="sujet">
            <label class="mdl-textfield__label" for="sujet">Sujet...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" name="company" type="text" id="company">
            <label class="mdl-textfield__label" for="company">Entreprise...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label mdl-chipfield" id="demo-2">
            <input type="hidden" class="mdl-chipfield__input" name="demo-2" value="">
            <input class="mdl-textfield__input" type="text" id="my-input-2">
            <label class="mdl-textfield__label" for="my-input-2">Technologies</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <textarea class="mdl-textfield__input" name="message" type="text" rows="5" id="note"></textarea>
            <label class="mdl-textfield__label" for="note">Parlez-moi de votre projet...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
            <input class="mdl-textfield__input" placeholder="Importez un document" name="attachment" type="text" id="TEXT_ID" readonly />
            <div class="mdl-button mdl-button--icon mdl-button--file">
                <i class="material-icons">attach_file</i>
                <input type="file" multiple name="attachment[]" id="uploaded_file" onchange="getFiles();" />
            </div>
        </div>
        <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div><br>
        <button class="mdl-button contact mdl-js-button mdl-button--raised mdl-js-ripple-effect contact-send" name="submit" type="submit">
            ENVOYER
        </button>
    </form>
</div>

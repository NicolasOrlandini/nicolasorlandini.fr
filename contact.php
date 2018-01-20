<?php
require_once 'mail.php';
require_once 'recaptcha.php';
$siteKey = '6LfZQ0AUAAAAAE_VuY8Ayl99Cjwzpj_kX6YbtsrC'; // votre clé publique
$secret = '6LfZQ0AUAAAAAApVJfXCQ9vBr67UK_Si1GKb1UbL'; // votre clé privée
?>
<div class="mdl-grid portfolio-max-width portfolio-contact">
    <form action="#" class="" method="POST" enctype="multipart/form-data">
        <div class="container-civility requiredCivility">
            <label class="civility" for="civility">Civilité</label>
            <div class="" aria-required="true">
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect radiobutton"
                       for = "monsieur">
                    <input required type = "radio" id="monsieur" name="gender"
                           class = "mdl-radio__button" value="Mr">
                    <span class = "mdl-radio__label">Monsieur</span>
                </label>
            </div>
            <div class="">
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect radiobutton" for="madame">
                    <input required type="radio" id ="madame" name="gender" class="mdl-radio__button" value="Mme" />
                    <span class="mdl-radio__label">Madame</span>
                </label>
            </div>
        </div><br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" name="nom" pattern="[A-Z,a-z, ]*" type="text" id="nom">
            <label class="mdl-textfield__label" for="nom">Nom...</label>
            <span class="mdl-textfield__error">Lettres et espaces seulement</span>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" name="prenom" pattern="[A-Z,a-z, ]*" type="text" id="prenom">
            <label class="mdl-textfield__label" for="prenom">Prénom...</label>
            <span class="mdl-textfield__error">Lettres et espaces seulement</span>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" name="email" type="text" id="Email">
            <label class="mdl-textfield__label" for="Email">Email...</label>
            <span class="mdl-textfield__error">Un email doit contenir un @</span>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" name="telephone" type="tel" pattern="^\+?\s*(\d+\s?){8,}$" maxlength="10" id="telephone">
            <label class="mdl-textfield__label" for="telephone">Numéro de téléphone...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label plateforme requirePlateforme">
            <label for="plateforme[]">Plateforme de votre projet</label>
            <div>
                <label class = "mdl-checkbox mdl-js-checkbox" for = "checkbox1">
                    <input type="checkbox" name="plateforme[]" value="android" id ="checkbox1" class="mdl-checkbox__input">
                    <img class="logoAndroid" src="./img/android_logo_2.png" alt="Android logo"><span class = "mdl-checkbox__label">Android</span>
                </label>
            </div>
            <div>
                <label class = "mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for = "checkbox2">
                    <input type="checkbox" name="plateforme[]" value="uwp" id = "checkbox2" class = "mdl-checkbox__input">
                    <img class="logo" src="./img/windows_logo.png" alt="C# logo"><span class = "mdl-checkbox__label">UWP</span>
                </label>
            </div>
            <div>
                <label class = "mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for = "checkbox3">
                    <input type="checkbox" name="plateforme[]" value="ios" id = "checkbox3" class = "mdl-checkbox__input">
                    <img class="logo" src="./img/Apple_Computer_Logo_rainbow.png" alt="iOS logo"><span class = "mdl-checkbox__label">iOS</span>
                </label>
            </div>
            <div>
                <label class = "mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for = "checkbox4">
                    <input type="checkbox" name="plateforme[]" value="web" id = "checkbox4" class = "mdl-checkbox__input">
                    <img class="logo" src="./img/HTML5_Logo.svg" alt="HTML5 logo"><span class = "mdl-checkbox__label">Web</span>
                </label>
            </div>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" name="website" type="text" id="website">
            <label class="mdl-textfield__label" for="website">Site internet...</label>
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
            <textarea class="mdl-textfield__input" name="message" rows="5" id="note"></textarea>
            <label class="mdl-textfield__label" for="note">Parlez-moi de votre projet...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
            <input class="mdl-textfield__input" placeholder="Importez un document" name="attachment" type="text" id="TEXT_ID" readonly />
            <div class="mdl-button mdl-button--icon mdl-button--file">
                <i class="material-icons">attach_file</i>
                <input type="file" multiple name="attachment[]" id="uploaded_file" onchange="getFiles();" />
            </div>
        </div>
        <div class="g-recaptcha" data-sitekey="6LfZQ0AUAAAAAE_VuY8Ayl99Cjwzpj_kX6YbtsrC" data-callback="enableSubmitButton"></div><br>
        <button id="submitButton" disabled class="mdl-button contact mdl-js-button mdl-button--raised mdl-js-ripple-effect contact-send btnSend" name="submit" type="submit">
            ENVOYER
        </button>
    </form>
</div>

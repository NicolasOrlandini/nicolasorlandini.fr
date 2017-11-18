<?php
require_once  'recaptcha.php';
$siteKey = '6LftGzgUAAAAAPIVLFDzuG0nL1e_054V-AltFU3T'; // votre clé publique
$secret = '6LftGzgUAAAAANgO8xSCE1avLBgJQKUAJPzJjPzb'; // votre clé privée
?>
<div class="mdl-grid portfolio-max-width portfolio-contact">
    <form action="#" class="" method="POST">
        <div class="mdl-selectfield mdl-js-selectfield">
            <select id="myselect" name="myselect" class="mdl-selectfield__select">
                <option value=""></option>
                <option value="option0_value">Madame</option>
                <option value="option1_value">Monsieur</option>
            </select>
            <label class="mdl-selectfield__label" for="myselect">Civilité</label>
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
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
            <input class="mdl-textfield__input" placeholder="Importez des documents" type="text" id="TEXT_ID" readonly />
            <div class="mdl-button mdl-button--icon mdl-button--file">
                <i class="material-icons">attach_file</i>
                <input type="file" name="NAME" id="ID" onchange="document.getElementById('TEXT_ID').value=this.files[0].name;" />
            </div>
        </div>
        <br>
        <br>
        <?php require_once 'getCaptcha.php'; ?>
        <br>
        <br>
        <form action="getCaptcha.php" method="POST">
            <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent btnSubmit" type="submit">
                ENVOYER
            </button>
        </form>
    </form>
</div>

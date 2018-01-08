<?php
require_once ("compteVisite.php");

compterVisite();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Vous avez une idée de projet d'application mobile Android ou Windows 10 Mobile ? Vous êtes sur Nice ? Alors je peux vous aider !">
    <meta name="keywords" content="Android, freelance, UWP, mobile, Nice, Développement mobile, Nicolas Orlandini, développeur mobile Nice, développeur android Nice" />
    <meta name="author" content="Nicolas Orlandini">
    <meta name="copyright" content="© Nicolas Orlandini - 2017" />   
    <link rel="stylesheet" href="./mdl/material.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/social.css">
    <link rel="stylesheet" href="./css/contact.css" />
    <link rel="stylesheet" href="./css/app.css" />
    <link rel="stylesheet" href="./css/chips.css">
    <link rel='stylesheet prefetch' href='http:////netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link rel ="icon" type="image/png" href="img/favicon.ico" >
    <link rel ="apple-touch-icon" href="images/apple-touch-icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
    <script src="./mdl/material.min.js"></script>
    <script src="./js/chart/Chart.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/contact.js"></script>
    <script src="./js/chips.js"></script>

    <title>Nicolas Orlandini | Développeur d'applications mobiles Android, UWP et web en Freelance | Nice</title>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="site-header">

            <div class="mdl-layout__header-row mdl-layout--large-screen-only">
                <span class="site-header__title">
                    <img src="./img/logo_on.png" width="180px" alt="ON logo">
                </span>
                <div class="mdl-layout-spacer"></div>
                <ul class="social-icons icon-circle icon-rotate list-unstyled list-inline">
                    <li>
                        <a href="https://github.com/NicolasOrlandini">
                            <i class="fa fa-github"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/nicolas-orlandini-1b3871129/">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-skype"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mdl-layout__header-row mdl-layout--large-screen-only">
                <!-- Navigation -->
                <div class="mdl-layout-spacer"></div>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="#serv">Services</a>
                    <a class="mdl-navigation__link" href="#pres">Présentation</a>
                    <a class="mdl-navigation__link" href="">Projets réalisés</a>
                    <a class="mdl-navigation__link" href="#contact">Me contacter</a>
                </nav>
                <div class="mdl-layout-spacer"></div>
            </div>
            <div class="mdl-layout__header-row mdl-layout--small-screen-only">
                <div class="mdl-layout-spacer"></div>
                <img src="./img/logo_on.png" width="120px" alt="ON logo">
                <div class="mdl-layout-spacer"></div>
            </div>

            <div class="mdl-layout__header-row mdl-layout--small-screen-only">
                <div class="mdl-layout-spacer"></div>
                <ul class="social-icons icon-circle icon-rotate list-unstyled list-inline">
                    <li>
                        <a href="https://github.com/NicolasOrlandini">
                            <i class="fa fa-github"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/nicolas-orlandini-1b3871129/">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-skype"></i>
                        </a>
                    </li>
                </ul>
                <div class="mdl-layout-spacer"></div>
            </div>
        </header>
    </div>

    <main>
        <div class="page-content">
            <div class="blur page-title">
                <div class="content">
                    <h1 class="title">
                        <span class="prenom">Nicolas</span>
                        <span class="nom">ORLANDINI</span>
                    </h1>
                    <div class="title-cadre">
                        <h2 class="title-activite">Développeur d'applications mobiles et web en Freelance</h2>
                        <p class="title-regime">Micro-Entrepreneur</p>
                    </div>
                    <form action="#contact">
                        <button class="mdl-button contact mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--white-colored" type="submit">
                            Me contacter
                        </button>
                    </form>
                </div>
            </div>
            <div class="background" id="serv">
                <h3 class="subtitle">Mes services</h3>
                <h3 class="subtitle">Plateformes</h3>
                <div class="mdl-grid services-grid">
                    <div class="mdl-cell mdl-cell--3-col services-cadre">
                        <img class="services-img" src="./img/android_logo_2.png" width="70px" alt="Android logo">
                        <p class="services-text">Développement Android</p>
                        <p class="justify">Développement d'application pour smartphones et tablettes Android (JAVA)</p>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col services-cadre">
                        <img class="services-img" src="./img/Apple_Computer_Logo_rainbow.png" width="70px" alt="Apple logo">
                        <p class="services-text">Développement iOS</p>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col services-cadre">
                        <img class="services-img" src="./img/windows_logo.png" width="70px" alt="C# logo">
                        <p class="services-text">Développement UNIVERSAL WINDOWS PLATFORM</p>
                        <p>Compatible Windows 10 Mobile et Windows 10 PC</p>
                    </div>
                    <div class="mdl-cell mdl-cell--3-col services-cadre">
                        <img class="services-img" src="./img/" width="70px" alt="outils logo">
                        <p class="services-text">Développement des outils associés aux applications</p>
                        <p>API REST JAVA</p>
                        <p>Interface d'administation</p>
                    </div>
                </div>

                <h3 class="subtitle">Des applications sur-mesure</h3>
                <p>Grâce à mon expertise nous pouvons ensemble aboutir à la meilleure solution.</p>
                <div class="mdl-grid services-grid">
                    <div class="mdl-cell mdl-cell--4-col services-cadre">
                        <p class="services-text">Idée originale d'application</p>
                        <p class="justify">Vous êtes un professionnel, un entrepreneur ? Vous avez une idée originale d'application ? 
                        Que vous ayez déjà rédigé un cahier des charges ou non, nous pouvons ensemble réfléchir au meilleur 
                        moyen de concretiser votre idée.</p>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col services-cadre">
                       <p class="services-text">Répondre à un besoin spécifique lié a votre activité</p>
                        <p class="justify">Vous avez besoin d'une application accessible rapidement sur des terminaux mobiles 
                        pour vous aider au quotidien dans votre activité ? Nous pouvons ensemble réfléchir au 
                        meilleur moyen de concretiser cette idée.</p>
                    </div>
                </div>
                <h3 class="subtitle">Une nouvelle vie pour vos applications</h3>
                <div class="mdl-grid services-grid">
                    <div class="mdl-cell mdl-cell--4-col services-cadre">
                        <p class="services-text">Refonte graphique</p>
                        <p class="justify">Vous disposez d'une application, cette dernière n'est plus assez moderne face aux 
                        constantes évolutions du marché du mobile ? Je peux vous aider ! En réalisant une 
                        nouvelle interface plus moderne est conviviale avec vous, votre application gagnera en 
                        notoriété et attirera de nouveaux clients.</p>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col services-cadre">
                        <p class="services-text">Ajout de nouvelles fonctionnalités</p>
                        <p class="justify">Vous disposez d'une application, vous envisagez d'ajouter une ou des nouvelles 
                        fonctionnalités pour répondre à un nouveau besoin ou gagner une nouvelle clientèle ? 
                        Je peux réaliser un diagnostique de votre application afin de permettre l'ajout 
                        d'éventuelles fonctionnalités ainsi que l'optimisation de votre application.</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="background background-dark-dark" id="pres">
                <h3 class="subtitle">Présentation</h3>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--4-col">
                        <i class="material-icons">call</i>
                        <p class="pres-infos">
                            <a class="bio-link" href="tel:0620703004">06 20 70 30 04</a>
                        </p>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col">
                        <i class="material-icons">location_on</i>
                        <p class="pres-infos">Nice, France</p>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col">
                        <i class="material-icons">mail_outline</i>
                        <p class="pres-infos">
                            <a class="bio-link" href="mailto:nicolas.orlandini@outlook.fr">nicolas.orlandini@outlook.fr</a>
                        </p>
                    </div>
                </div>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--8-col justify">
                        Je suis un jeune développeur, spécialisé dans le développement d'applications mobiles. 
                        Je suis passionné par le monde de l'informatique depuis toujours. La mobilité me passionne 
                        particulièrement depuis que j'ai eu mon premier smartphone Android. Je me suis donc tourné 
                        vers une licence professionnelle spécialisée en Développement d'Applications Mobiles. 
                        Cette formation m'a permis d'explorer la plupart des langages orientés mobilité et 
                        d'acquérir de solides compétences dans ce domaine.
                        <br>
                        <br> 
                        J'ai décidé de me lancer dans l'aventure de l'auto-entreprenariat car, pour moi, fournir un travail
                        de qualité est indispensable et fait toute la différence. Mon statut me permet de m'investir totalement
                        dans les projets que je réalise pour obtenir un résultat au plus proche de vos attentes.
                    </div>
                    <div class="mdl-cell mdl-cell--4-col cv-text">
                        <span>Téléchargez mon CV</span>
                        <br>
                        <br>
                        <a href="./fichiers" download="CV_Orlandini_Nicolas.pdf">
                            <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                                <i class="material-icons">file_download</i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="background background-dark" id="comp">
                <h3 class="subtitle">Mes compétences</h3>

                <ul class="list-unstyled list-inline">
                    <li>
                        <canvas id="pieChartAndroid" class="pie"></canvas>
                        <h4>Android</h4>
                    </li>
                    <li>
                        <canvas id="pieChartiOS" class="pie"></canvas>
                        <h4>Swift</h4>
                    </li>
                    <li>
                        <canvas id="pieChartCSharp" class="pie"></canvas>
                        <h4>C# / UWP</h4>
                    </li>
                    <li>
                        <canvas id="pieChartJava" class="pie"></canvas>
                        <h4>JAVA</h4>
                    </li>
                    <li>
                        <canvas id="pieChartHtmlCss" class="pie"></canvas>
                        <h4>HTML5 / CSS3</h4>
                    </li>
                </ul>
            </div>
            <div class="background contact-background" id="contact">
                <h3 class="subtitle">Me contacter</h3>
                
                    <?php include_once 'contact.php'; ?>
            </div>
    </main>

<footer class="mdl-mega-footer customFooter">
    <div class="mdl-mega-footer__middle-section divUp">
        <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h3 class="mdl-mega-footer__heading">Mes informations</h3>
            <ul class="mdl-mega-footer__link-list">
                <li>
                    <a class="footer-link" href="#pres">Présentation</a>
                </li>
                <li>
                    <a class="footer-link" href="#comp">Compétences</a>
                </li>
                <li>
                    <a class="footer-link" href="#">Formation</a>
                </li>
            </ul>
        </div>

        <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h3 class="mdl-mega-footer__heading">Projets réalisés</h3>
            <ul class="mdl-mega-footer__link-list">
            </ul>
        </div>

        <div class="mdl-mega-footer__drop-down-section">
            <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
            <h3 class="mdl-mega-footer__heading">Me contacter</h3>
            <ul class="mdl-mega-footer__link-list">
                <li>
                    <a class="footer-link" href="#contact">Contact</a>
                </li>
                <li>
                    <a class="footer-link" href="mailto:nicolas.orlandini@outlook.fr">nicolas.orlandini@outlook.fr</a>
                </li>
                <li>
                    <a class="footer-link" href="tel:0620703004">06 20 70 30 04</a>
                </li>
            </ul>
        </div>
        <div class="mdl-mega-footer__drop-down-section">
        <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
        <h3 class="mdl-mega-footer__heading">Mes réseaux</h3>
        <ul class="mdl-mega-footer__link-list">
            <ul class="social-icons icon-circle icon-rotate list-unstyled list-inline">
                <li>
                    <a href="https://github.com/NicolasOrlandini">
                        <i class="fa fa-github"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/nicolas-orlandini-1b3871129/">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa fa-skype"></i>
                    </a>
                </li>
            </ul>
        </ul>
    </div>
    </div>
    <div class="mdl-mini-footer divDown">
        <div class="mdl-mini-footer__left-section">
            <div class="mdl-logo">© Nicolas ORLANDINI</div>
            <p>Tous droits réservés - 2017-2018</p>
        </div>
        <!--<div class="mdl-mini-footer__right-section">
            <div class="mdl-mega-footer__link-list">
                <a href="#">Mentions légales</a> -
                <a href="#">Conditions générales de vente</a>
            </div>
        </div>-->
    </div>
</footer>

    <script src="https://www.google.com/recaptcha/api.js"></script>
</body>

</html>

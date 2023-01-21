
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tesla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sora">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/createAccount.css">
    <link rel="stylesheet" href="/css/modele.css">
    <link rel="stylesheet" href="/css/reservation.css">
    <link rel="stylesheet" href="/css/account.css">
    <link rel="stylesheet" href="/css/resume_config.css">
    <link rel="stylesheet" href="/css/droit.css">
    <link rel="stylesheet" href="/css/createVehicule.css">
    <link rel="stylesheet" href="/css/aide.css">
    <link rel="stylesheet" href="/css/faq.css">
    <script defer type="text/javascript" src="/js/cookie_banner.js"></script>
</head>
<body>


<div class="header">
        <a id="a_header_tesla" href="/">
            <img id="logoTesla" src="/images/Tesla-Embleme.png" alt="Embleme Tesla">
        </a>
        <div class="subHeader">
            <a class="butSubHeader" id="header_boutique" href="/boutique" >
                <div class="div_header_logo">
                    <img class="logo" src="/images/logos/boutique.png"></img>
                </div>
            </a>
            <a class="butSubHeader" id="header_panier" href="/panier">
                <div class="div_header_logo" >
                    <img class="logo" src="/images/logos/caddie.png"></img>
                </div>
            </a>
            <a class="butSubHeader" id="header_compte" href="/home">
                <div class="div_header_logo" >
                    <img class="logo" src="/images/logos/logo_user.png"></img>
                </div>
            </a>
            <!-- <a class="butSubHeader" id="header_aide" href="/help">
                <div class="div_header_logo" >
                    <img class="logo" src="/images/logos/help.png"></img>
                </div>
            </a> -->
        </div>
</div>


<div id="cookie_management" style="display: none;">
        <h2>Gestion des cookies</h2>
        <p>Vous pouvez activer ou désactiver les différents types de cookies utilisés sur ce site :</p>
        <p id="cookie_p_italique">vert = activé | gris = désactivé</p>
        <ul id="cookie_list">
            <hr>
            <li id="cookie_1_li">
                <input type="checkbox" class="input_cookie" id="cookie_required" checked>
                <label id="label_cookie_1" for="cookie_required"></label>
                <p>Techniques</p>
                <div class="cookie_container_li">
                    <button class="cookie_btn_collapsible">+</button>
                    <div class="cookie_description">
                        <p>Ces cookies sont nécessaires au bon fonctionnement du site et donc obligatoires. Conformément à RGPD, ils ne contiennent pas d'information sensible.</p>
                    </div>
                </div>
            </li>
            <hr>
            <li class="cookies_li_list">
                <input type="checkbox" class="input_cookie" id="cookie_preferences">
                <label class="label_cookies" for="cookie_preferences"></label>
                <p>Optionnels</p>
                <div class="cookie_container_li">
                    <button class="cookie_btn_collapsible">+</button>
                    <div class="cookie_description">
                        <p>En activant ces cookies, vous aurez des recommandations en fonction des articles que vous avez pu consulter. Ils vous permettent de gagner du temps sur votre recherche et sélection de produits.</p>
                    </div>
                </div>
            </li>
            <hr>
            <li class="cookies_li_list">
                <input type="checkbox" class="input_cookie" id="cookie_stats">
                <label class="label_cookies" for="cookie_stats"></label>
                <p>Statistiques</p>
                <div class="cookie_container_li">
                    <button class="cookie_btn_collapsible">+</button>
                    <div class="cookie_description">
                        <p>Ces cookies permettent de collecter des informations quant à votre navigation sur le site. Ces informations sont utilisées uniquement à des fins statistiques.</p>
                    </div>
                </div>
            </li>
            <hr>
            <li class="cookies_li_list">
                <input type="checkbox" class="input_cookie" id="cookie_marketing">
                <label class="label_cookies" for="cookie_marketing"></label>
                <p>Publicité</p>
                <div class="cookie_container_li">
                    <button class="cookie_btn_collapsible">+</button>
                    <div class="cookie_description">
                        <p>Ces cookies permettent une meilleur expérience utilisateur. Les activer vous permettra de voir des publicités ciblées. </p>
                    </div>
                </div>
            </li>
            <hr>
        </ul>
        <button class="cookie_btn_management" id="cookie_management_validate">Valider</button>
        <button class="cookie_btn_management" id="cookie_management_close">Fermer</button>
    </div>
</div>


<div id="page">    
    <?php
        if(!isset($_COOKIE['cookieConsent'])){
    ?>
        <div class="banner_cookie" id="cookie_banner_id">
            <div class="text_banner_cookie">
                <p>Notre site utilise des cookies pour une meilleur expérience</p>
                <p>
                <a class="clickable" href="/mentions-legales">Mentions légales</a>
                |
                <a class="clickable" href="/donnees-personnelles">Politique des données personnelles</a>
                </p>
            </div>
            <button class="button_banner_cookie" id="accept_cookie">ACCEPTER</button>
            <button class="button_banner_cookie" id="gerer_cookie">GÉRER MES COOKIES</button>
            <button class="button_banner_cookie" id="decline_cookie">DECLINER</button>
        </div>
    <?php
        }
    ?>
<?php 
if (!isset($_SESSION)){
    session_start();
}
if (!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
}?>


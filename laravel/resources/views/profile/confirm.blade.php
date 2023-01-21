<?php include '../public/php/header.php' ?>
<?php
    if (isset($_COOKIE["pageThemeActuel"])){
        setcookie("pageThemePrecedente",$_COOKIE["pageThemeActuel"]);
    }
    setcookie("pageThemeActuel","profil");
?>


    <div class="confirm_div">
        <h2>Merci de nous avoir fait confiance.</h2>
        <h3>Vos données ont bien été supprimées et anonymisées.</h3>
        <h3 id="h3">L'équipe de Tesla</h3>
        <input class="button_style_edit" type="button" onclick="window.location.href='/';" value="Retourner sur la page principale">
    </div>
</div>    
<footer>
    <p style="margin-bottom:8px;">
        <a href="/mentions-legales">Mentions légales</a>
        |
        <a href="/donnees-personnelles">Politique des données personnelles</a>
        |
        <a id="gerer_cookie_footer" href="#">Gérer mes cookies</a>
        |
        <a href="/contact">Contact</a>
        |
        <a href="/faq">F.A.Q</a>
    </p>
    <p>Tesla Corporation ~2022</p>
</footer>
</body>
</html>

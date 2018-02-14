<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Jean';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 24;

//creation d'un cookie(nom, valeur, date d'expiration, ..., actrivation du mode httpOnly pour réduire les risques de failles XSS) AVANT d'écrire du code HTML
setcookie('pseudo', 'Jean', time() + 3600, null, null, false, true);

setcookie('pays', 'France', time() + 3600, null, null, false, true); // On écrit un autre cookie...

//On peut modifier un cookie refaisant un appel à setcookie en gardant le même nom du cookie
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page</title>
    </head>

    <body>
        <p>
            Salut <?php echo $_SESSION['prenom']; ?> !<br />
            Tu es à l'accueil de mon site (index.php). Tu veux aller sur une autre page ?
        </p>

        <p>
            <a href="mapage.php">Lien vers 'mapage'</a><br />
            <a href="monscript.php">Lien vers 'monscript'</a>
            <br />
        </p>
    </body>
</html>
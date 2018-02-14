<?php
    session_start();

    if(isset($_COOKIE['pseudo'], $_COOKIE['pays']))
    {
        echo 'Bonjour '.$_COOKIE['pseudo'].' !<br />Localisation : '.$_COOKIE['pays'];
    }

echo '<br /><br />';

    if(isset($_SESSION['prenom'], $_SESSION['nom']))
    {
        echo 'Bonjour '.$_SESSION['prenom'].' !<br />Nom : '.$_SESSION['nom'];
    }
?>

<p>
    <a href="deconnexion.php">deconnexion</a>
</p>
<?php

include("bdd.php");

if((!empty($_POST['pseudo'])) && (!empty($_POST['message'])))
{
    $req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)') or die(print_r($bdd->errorInfo()));

    $req->execute(array(
        'pseudo'  => htmlspecialchars($_POST['pseudo']),
        'message' => htmlspecialchars($_POST['message'])
        ));

    $req->closeCursor();

    setcookie('pseudo', $_POST['pseudo'], time() + 3600);

    header('Location: minichat.php');
}
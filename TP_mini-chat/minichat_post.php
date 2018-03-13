<?php

header('Location: minichat.php');

include("bdd.php");

$req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)') or die(print_r($bdd->errorInfo()));

$req->execute(array(
    'pseudo'  => htmlspecialchars($_POST['pseudo']),
    'message' => htmlspecialchars($_POST['message'])
    ));

$req->closeCursor();
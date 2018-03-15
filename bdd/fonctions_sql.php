<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT COUNT(*) AS nb_jeux_Patrick_unJoueur FROM jeux_video WHERE possesseur = \'Patrick\' AND nbre_joueurs_max = 1');

$donnees = $reponse->fetch();

echo $donnees['nb_jeux_Patrick_unJoueur'];

echo '<br />';

$reponse = $bdd->query('SELECT COUNT(DISTINCT console) AS nb_consoles FROM jeux_video');

$donnees = $reponse->fetch();

echo $donnees['nb_consoles'].'<br />';

$reponse = $bdd->query('SELECT SUM(prix) AS total_possesseur, possesseur FROM jeux_video GROUP BY possesseur') or die(print_r($bdd->errorInfo()));

while($donnees = $reponse->fetch())
{
    echo 'la valeur total des jeux de '.$donnees['possesseur'].' est de '.$donnees['total_possesseur'].' € <br />';
}
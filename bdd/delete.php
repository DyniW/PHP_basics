<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$nb_suppr = $bdd->exec('DELETE FROM jeux_video WHERE nom=\'Battlefield 1942\'');

echo $nb_suppr . ' entrées ont été supprimées';
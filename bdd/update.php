<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$nb_modifs1 = $bdd->exec('UPDATE jeux_video SET prix = 12, nbre_joueurs_max = 32 WHERE nom = \'Battlefield 1942\'');

$nb_modifs2 = $bdd->exec('UPDATE jeux_video SET possesseur = \'Michel\' WHERE possesseur = \'Florent\'');

//compte le nombre de lignes modifiées
echo $nb_modifs1 + $nb_modifs2 . ' entrées ont été modifiées !';

//avec une requête préparée
/*
    $req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
    
    $req->execute(array(
    'nvprix' => $nvprix,
    'nv_nb_joueurs' => $nv_nb_joueurs,
    'nom_jeu' => $nom_jeu
    ));
*/
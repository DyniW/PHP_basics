<?php

//Quelques ex. de fonctions

//strlen, calcule la longueur d'une chaîne

//str_replace, remplace le caractere passé en paramatre 1 par le 2
$ma_variable = str_replace('m', 'p', 'bim bam boum');
echo $ma_variable.'<br /><br />';

//str_shuffle melange les lettres aléatoirement
$chaine = 'Everyday I\'m shuffling !';
$chaine = str_shuffle($chaine);
echo $chaine.'<br /><br />';

//strtolower renvoie une chaine de caractère en minuscules
$chaine = 'JE VAIS RETRECIR !';
$chaine = strtolower($chaine);
echo $chaine.'<br /><br />';

//strtoupper pour renvoyer en majuscules

//fonction qui calcule le volume d'un cube en fonction de l'arete
function calculCube($arete)
{
    return $arete * $arete * $arete;
}

$volume = calculCube(4);

echo 'volume = '.$volume.'<br /><br />';
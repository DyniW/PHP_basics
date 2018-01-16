<?php

session_start();

echo 'Bonjour '.$_SESSION['prenom'].' !';

// 1 : on ouvre le fichier
$monfichier = fopen('compteur.txt', 'r+');

// 2 : on fera ici nos opérations sur le fichier...

$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';

// 3 : quand on a fini de l'utiliser, on ferme le fichier
fclose($monfichier);
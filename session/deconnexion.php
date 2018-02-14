<?php

session_start();

session_destroy();

setcookie('pseudo', 'Jean', time() - 3600, null, null, false, true);

setcookie('pays', 'France', time() - 3600, null, null, false, true);

echo "Vous avez été déconnecté avec succès";

?>

<p>
    <a href="mapage.php">Lien vers 'mapage'</a><br />
    <a href="monscript.php">Lien vers 'monscript'</a><br />
    <a href="index.php">Accueil</a>
    <br />
</p>
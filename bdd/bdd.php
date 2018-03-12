<?php
    try
    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');
    }
    catch (Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : ' . $e->getMessage());
    }

    // Si tout va bien, on peut continuer

    // On récupère tout le contenu de la table jeux_video
    $reponse = $bdd->query('SELECT * FROM jeux_video ORDER BY nom LIMIT 0, 5');//$reponse contient le retour de la requete en vrac (forme objet)
    //LIMIT prend 2 clauses séparés d'une virgule : la premiere correspond à l'entrée sur laquelle on va commencer à compter et la deuxieme corresspond au nombre d'entrées

    // On affiche chaque entrée une à une
    //$donnees est un array renvoyé par le fetch() (organise $reponse dans l'array $donnees)
    while ($donnees = $reponse->fetch())// récupère une nouvelle entrée et place son contenu dans $donnees et vérifie si $donnees vaut vrai ou faux
    //fetch renvoie faux dans $données à la fin de la lecture des entrées > donc while aussi > donc fin de la boucle
    {
?>
    <p>
        <strong>Jeu</strong> : <?php echo $donnees['nom']; ?>
        <br />
        Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> € !
        <br />
        Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
        <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
    </p>
<?php
    }

    $reponse->closeCursor(); // Termine le traitement de la requête

    $reponse2 = $bdd->query('SELECT nom, possesseur FROM jeux_video WHERE possesseur=\'Patrick\' AND prix < 20 ORDER BY nom DESC');

    while ($donnees2 = $reponse2->fetch())
    {
        echo $donnees2['nom'] . ' appartient à ' . $donnees2['possesseur'] . '<br />';
    }    

    $reponse2->closeCursor(); // Termine le traitement de la requête

//N.B.: WHERE > ORDER BY > LIMIT
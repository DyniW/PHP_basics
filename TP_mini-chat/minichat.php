<!DOCTYPE html>

<html>
    <head>
        <title>Mini-chat</title>
        <meta charset="utf-8">
    </head>

    <body>
        <form method="post" action="minichat_post.php">
            <p>
                <label for="pseudo">Pseudo</label> : 
                <input type="text" name="pseudo" id="pseudo">
            </p>
            <p>
                <label for="message">Message</label> :

                <br />
                
                <textarea name="message" rows="5" cols="22" id="message">
                </textarea>
            </p>
            <p>
                <input type="submit" name="submit" value="Envoyer">
            </p>
        </form>

        <p>
            <?php
                include("bdd.php");

                $reponse = $bdd->prepare('SELECT pseudo, message FROM minichat ORDER BY id DESC LIMIT 0, 10') or die(print_r($bdd->errorInfo()));

                $reponse->execute(array(
                    'pseudo',
                    'message'
                ));

                echo '<ul>';
                while($donnees = $reponse->fetch())
                {
                    echo '<li><em>'.$donnees['pseudo'].'</em> : '.$donnees['message'].'</li>';
                }
                echo '</ul>';

                $reponse->closeCursor();
            ?>
        <p>
    </body>
</html>
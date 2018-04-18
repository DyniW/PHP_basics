
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
                <input type="text" name="pseudo" id="pseudo" required value="<?php
                                    if(isset($_COOKIE['pseudo']))
                                    {
                                        echo $_COOKIE['pseudo'];
                                    }
                                ?>" />
            </p>
            <p>
                <label for="message">Message</label> :

                <br />
                
                <textarea name="message" rows="5" cols="22" id="message" value="" autocomplete="off" required></textarea>
            </p>
            <p>
                <input type="submit" name="submit" value="Envoyer">
            </p>
        </form>

        <form name="form2" method="post" action="minichat.php">
            <p>
                <label for="choix">Nombre de messages à afficher : </label>
                
                <select name="choix" id="choix" onchange="document.form2.submit()">
                    <option value="selection" disabled selected>selectionner un nombre</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                </select>
            </p>
        </form>

        <p>
            <?php
                include("bdd.php");

                if(isset($_POST['choix']))
                {
                    $limit = $_POST['choix'];
                }
                else
                {
                    $limit = 10;
                }

                $reponse = $bdd->prepare('SELECT pseudo, message, date FROM minichat ORDER BY id LIMIT 0, '.$limit) or die(print_r($bdd->errorInfo()));

                $reponse->execute(array(
                    'pseudo',
                    'message'
                ));

                echo '<ul>';
                while($donnees = $reponse->fetch())
                {
                    echo '<li>['.$donnees['date'].'] <em>'.htmlspecialchars($donnees['pseudo']).'</em> : '.htmlspecialchars($donnees['message']).'</li>';
                }
                echo '</ul>';

                $reponse->closeCursor();
            ?>
        <p>

        <button onclick="myFunction()">Actualiser la page</button>

        <script>
            function myFunction()
            {
                location.reload();
            }
        </script>
    </body>
</html>
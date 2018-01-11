
<p>
    Bonjour

    <?php 
        echo strip_tags($_POST['prenom']);//strip_tags enlève les balises et htmlspecialchars réaffiche les balises en texte en les transformant en &lt; et &gt;
    ?> 

    !
</p>

<p><?php echo $_POST['message'] ?></p>

<p><?php echo 'Votre choix : '.$_POST['choix'] ?></p>

<p>
    <?php
        if(isset($_POST['case']))
        {
            echo 'La case est cochée';
        }
        else
        {
            echo 'La case n\'est pas cochée';
        }
    ?>
</p>

<p>
    <?php
        if(isset($_POST['frites']))
        {
            if($_POST['frites'] == 'oui')
            {
                echo 'Vous aimez les frites';
            }
            else
            {
                echo 'Vous n\'aimez pas les frites';
            }
        }
    ?>
</p>

<p>
    Si ce n'est pas vous, <a href="formulaire.php">cliquez-ici</a> pour revenir au formulaire
</p>
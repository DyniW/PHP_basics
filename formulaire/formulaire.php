<!DOCTYPE html>

<html>
    <head>
        <title></title>
    </head>

    <body>
        <form method="post" action="cible.php">
            <p><b>Votre prénom :</b>
                <input type="text" name="prenom" />
            </p> 

            <br />

            <!-- Text box -->
            <textarea name="message" rows="8" cols="45">
                Votre message ici.
            </textarea>

            <br /><br />

            <!-- Liste déroulante -->
            <p>
                <select name="choix">
                    <option value="choix n°1">Choix 1</option>
                    <option value="choix n°2">Choix 2</option>
                    <option value="choix n°3">Choix 3</option>
                    <option value="choix n°4">Choix 4</option>
                </select>
            </p>

            <!-- Checkbox -->
            <input type="checkbox" name="case" id="case" checked="checked" />
            <label for="case">Ma case à cocher</label>

            <br /><br />

            <!-- Bouton radio -->
            Aimez-vous les frites ?

            <input type="radio" name="frites" value="oui" id="oui" checked="checked" /> 
            <label for="oui">Oui</label>

            <input type="radio" name="frites" value="non" id="non" />
            <label for="non">Non</label>

            <p>
                <input type="submit" value="Valider" />
            </p>
        </form>
    </body>
</html>
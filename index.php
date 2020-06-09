<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>partie 6 exercice 5</title>
    </head>
    <body>
        <a href="index.php?week=12">Clique ici !</a>
        <?php 
            if (isset($_GET['week'])){
                echo '<p>Nous somme la semaine numero ' . $_GET['week'] . '</p>';
            }
        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les types de variables</title>
</head>
<body>
    <h1>Les types de variables</h1>
    <h2>Les string (text)</h2>
    <p>Les chaînes de caractères sont mises dans des variables de type string ou str, ce sont les variables les plus utilisées pour l'affichage de texte dans les sites web</p>
    <p>On peut les utiliser et les mettre une à la suite de... Cela s'appelle la concaténation.</p>    

    <?php 
    
    // création de la variable  (ici en camelCase), avec le = qui donne la valeur. En procédural, le typage stricte n'est pas obligatoire
    $monTitre = "Bientôt la fin de ce cours interminable !";
    
    // affichage du contenu de la variable avec une chaine concaténée (utilisation du . ou de la virgule)
    echo $monTitre." Yes <br>";
    echo "Le type de la variable est ".gettype($monTitre).' !';
    ?>

    <p><a href="https://www.php.net/manual/fr/language.variables.basics.php" target="_blank">string</a></p>

</body>
</html>
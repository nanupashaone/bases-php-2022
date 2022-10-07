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

    <h2>Les numérique</h2>

    <p>Les numériques sont les variables les plus utilisées pour les calculs, il existe plusieurs sous types de ceux ci</p>

    <h3>Les entiers (interger,int)</h3>

    <p>Sont des entiers les nombres sans virgules, positifs comme négatifs</p>
    
    <p>Les calculs de base se font avec les signes : + * / -</p>
    
    <?php
    $myFirstInt = 22;
    $mySecondInt = - 7;

    // addition

    $add = $myFirstInt + $mySecondInt;
    echo $add;
    echo "<br>";

    // soustraction

    $sous = $myFirstInt - $mySecondInt;
    echo $sous;
    echo "<br>";

    // multiplication

    $multi = $myFirstInt * $mySecondInt;
    echo $multi;
    echo "<br>";

    // division 

    $div = $myFirstInt / $mySecondInt;
    echo $div;
    echo "<br>";
    
    

    ?>



    <?php
    

    $firstFloat = 8.27;
    $secondFloat = -796578526;
    ?>
    
    <h3>Les chiffres à virgules (float, doubles et nombre réels)</h3>
    <p>Ils ont le type float, attention en cas de calcul en base 10, on peut avoir des erreurs du au fait que les ordinateurs travaillent sur les calculs en base 16 <br> ! On utilise le . et pas la , comme séparateur !</p>
    
    <hr>
    <h2>Les booléens (bool, boolean)</h2>
    <p>Variable représentant sur un seul bit les 2 possibilités du binaire= true ou false</p>
    
    <?php
    
    $bool1 = true;
    $bool2 = false;

    



    
    
    
    ?>

    <h2>Les types NULL (NULL)</h2>
    <p>Le type NULL est une variable sans valeurs</p>    
  

    <hr>

    <?php

    $nada = null;

    ?>
    
    <h2>Les types tableaux (array)</h2>
    <p>Les tables permettent de contenir plusieurs vaiables à l'intérieur d'une variable de type array. Ils sont multidimentionnels, càd on peu tavoir autant de tableaux que nécessaire dans un tableau.</p>

    <p>Il existe 2 types de tableaux : les tableaux indexés, et le tableau associatifs</p>

    <h3>Tableau indexé</h3>

    <p>Il ne contient que des valeurs, les clefs sont attribuées par PHP</p>

    <?php 

    $tab1 = array (5, "lulu", "dupuis",true);

    // debogage de tableaux ou objets avec le print_r, moins complet que le var_dump

    print_r($tab1);

    // on veut afficher la 2eme cléf:

    echo $tab1[1];

    ?>

    <h3>Tableau associatif</h3>
    <p>Tableau dont on a indiqué au moins 1 des clefs, ce qui en fait un tableau associatif</p>

    <?php

    // création d'un tableau associatif

    $tab2 = array("un"=>1,

                    "deux"=>2,
                    "trois"=>3,
                
                );

    // debogage de tableaux ou objets avec print_r

    print_r($tab2);
    echo $tab2["deux"];

    ?>

    <?php 
    // outil de déboage
    
    var_dump($myFirstInt,$mySecondInt, $add, $multi, $sous, $div, $firstFloat, $secondFloat, $bool1, $bool2, $nada, $tab1, $tab2);
    ?>


</body>
</html>
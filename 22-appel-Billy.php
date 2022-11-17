<?php
include "22-functions.php";
// Débogage de la globale POST
// var_dump($_POST);

$resultat = "utilisez notre calculette";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de nos fonctions</title>
    <link rel="stylesheet" href="calculatrice.css">
</head>
<body>
    <h1>Test de nos fonctions</h1>
    <h2>Calculatrice</h2>
    <p>Exercice - enregistrez ce fichier sous 22-appel-{prenom}.php mettez ici un formulaire à 2 entrées et un select avec + - * /</p>
    <p>Lorsqu'on clique sur envoyer, le formulaire est envoyé par POST, et le résultat s'affiche en dessous</p>
    <p>Bonus, changez la fonction pour afficher par exemple :<br> 25/5 = 5</p>

    <form action="" name="calcul" method="POST">
        <input type="text" name="nb-1" />
        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="nb-2" />
        <input type="submit" value="Résultat" />
    </form>

 


</body>
</html>

<?php 

if(isset ($_POST['nb-1'],$_POST['nb-2'],$_POST["op"])) {
    echo calculBasic($_POST['nb-1'],$_POST['nb-2'],$_POST["op"]);
}




<?php

// importation des dépendances

require_once "../config.php";

// Essai de connexion à la DB
try{

    // connexion
    $connectDB = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);

    // charset
    mysqli_set_charset($connectDB,DB_CHARSET);

// si erreur, on l'attrape dans l'objet Exception, mis dans la variable $e (pointeur vers l'objet)
}catch(Exception $e){

    // arrêt du script et affichage du code et de l'erreur (en OO), utf8_encode permet d'éviter les caractères problématiques
    die($e->getCode()." ".utf8_encode($e->getMessage()));
    

}

// requête
$sql ="SELECT * FROM `articles` ORDER BY `datearticles` DESC";

// exécution de la requête
$query = mysqli_query($connectDB,$sql) or die("Erreur :".mysqli_error($connectDB));

// on va compter le nombre de résultats
$nb = mysqli_num_rows($query);

// si pas de résultats
if(empty($nb)){
    // gestion de l'affichage de l'erreur
    $erreur0 = "Pas encore d'articles";
}else{
    // récupérer tous les articles dans un tableau indexé (chaque article est un tableau associatif -> MYSQLI_ASSOC)
    $datas = mysqli_fetch_all($query,MYSQLI_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos articles</title>
</head>
<body>
    <h1>Nos articles</h1>
    <?php
    // pas d'article
    if(isset($erreur0)):
    ?>
    <h2><?=$erreur0?></h2>
    <?php
    // au moins un article
    else:
    ?>
        <h3><?= ($nb < 2)? "$nb article": "$nb articles"; // ternaire ?></h3>
        <?php
        // tant qu'on a des articles
        foreach($datas as $item):
        ?>
    <div class="article">
        <h4><?=$item['titrearticles']?></h4>
        <p><?=$item['textearticles']?></p>
        <p><?=$item['datearticles']?></p>
    </div>
    <?php
        endforeach;
    endif;
    ?>
</body>
</html>
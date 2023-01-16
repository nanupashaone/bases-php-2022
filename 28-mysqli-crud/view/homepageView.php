<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil de tous nos articles</title>
</head>
<body>
    <h1>Page d'accueil de tous nos articles</h1>
    
    <?php
    // pas d'articles
    if(empty($nbarticles)):
    ?>
    <h2>Pas encore d'articles sur ce site</h2>
    <?php
    // au moins un article
    else:
    ?>
    <h2>Nombre d'articles: <?=$nbarticles?></h2>
    <?php
        foreach($resultat as $item):
            ?>
    <div class="article">
    <h3><?=$item['art_title']?></h3>
    <?php
    // conversion des chaînes de caractères contenant les id des sections et leurs noms en tableaux
    $idsection = explode(",",$item['idrubriques']);
    $nomsection = explode("|||",$item['rub_title']);

    // variable pour les rubriques
    $rubriques = "";
    // tant que l'on a des rubriques
    foreach($idsection as $clef => $valeur){
        $rubriques .= "<a href='?section=$valeur'>{$nomsection[$clef]}</a> | ";
    }
    ?>
    
    <h4><?=$rubriques?></h4>
    <p><?=$item['art_text']?>... <a href="?article=<?=$item['idarticles']?>">Lire la suite</a></p>
    <h4>Ecrit par <a href="?auteur=<?=$item['idusers']?>"><?=$item['user_login']?></a></h4>
    <hr>

    </div>
            <?php
        endforeach;
    endif;
    ?>
</body>
</html>
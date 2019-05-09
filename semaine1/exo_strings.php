<?php
/**
 * En vous référent à la documentation en ligne de PHP (php.net), transformer les chaines de caractères suivantes
 * selon les directives indiquées
 *
 *
 * 1_ Transformer une chaîne en majuscule en minuscule
 * 2_ Transformer en majuscule le premier caractère d'une chaîne
 * 3_ Transformer en majuscule le premier caractère de chaque mot d'une chaîne
 * 4_ Calculer le nombre de caractère présent dans une chaîne
 * 5_ Supprimer les espaces en début et fin d'une chaîne
 * 6_ Supprimer la première lettre d'une chaîne
 * 7_ Remplacer des caractères présents dans une chaîne par d'autres caractères
 *
 *
 *
 */
$str ="VOITURE";
$string = "Je Teste Une VOITURE ";
$string_to_lower = strtolower($string);

$str_test = "Je pars au cinéma" ;
// Je-pars-au-cinéma
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>1_ Transformer une chaîne en majuscule en minuscule</h2>
<p>La chaîne en maj <?=  $string  ?> devient en minuscule:
    <?= $string_to_lower ?></p>

<p>    chat   </p>
</body>
</html>

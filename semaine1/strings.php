<?php
//include "commentaire.php";
require "commentaire.php";
//require_once "commentaire.php";

$prenom = "Marie";
$nom = "de Ubeda";
$age =35;
$age_requis = 18;
$ville = "Paris";
$resultat = somme(2,55);
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

    <?php echo "<h1>Salut $prenom</h1>"; ?>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        J'habite à , <?php echo $ville ?> aut blanditiis consequatur consequuntur
        dolore doloremque doloribus, esse in minima nam omnis quis
        rem velit vitae! Accusantium maxime minima mollitia!</p>

<?php if($age >=$age_requis) {
    echo "<h2>salut tu as l'âge requis</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
 Est, ipsam nulla quam quis soluta tenetur ullam voluptates? 
 Aperiam aut, commodi consequatur hic nulla officia perspiciatis quas quod, temporibus voluptas voluptatibus!</p>";

}
?>

<?php if($age == $age_requis) { ?>
    <p>Salut <?php echo $prenom ?>. <br>Bienvenue sur notre site !</p>
<?php } ?>

<?php if($age <$age_requis) : ?>
    <h4>Tu es trop petit(e) ! Reviens plus tard !</h4>
<?php else :?>
    <h1>Bienvenue <?php echo $prenom  ?></h1>
    <p>Ville: <?= $ville ?></p>
<?php endif ?>




</body>
</html>


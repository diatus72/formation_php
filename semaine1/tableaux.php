<?php

// Les tableaux à indice numérique
//$notes_eleves = array(12,5,6,17,12,14,13,20);
// Autre syntaxe
$notes_eleves = [12,5,6,17,12,14,13,20];

// Somme de toutes les notes
$somme_notes = array_sum($notes_eleves);

// Nombre de notes
$nb_notes = count($notes_eleves);



//$moyenne = round($somme_notes / $nb_notes,1);
$moyenne = round(array_sum($notes_eleves) / count($notes_eleves),1);

echo "somme des notes: $somme_notes".PHP_EOL;
echo "nb de notes: $nb_notes".PHP_EOL;
echo "La moyenne des notes est: $moyenne".PHP_EOL;



// Afficher la meilleur note
$meilleure_note = max($notes_eleves);
//echo "La meilleur note est ".max($notes_eleves);
echo "La meilleur note est $meilleure_note".PHP_EOL;

// Afficher la moins bonne note
$worst_note = min($notes_eleves);
echo "La moins bonne note est $worst_note".PHP_EOL;
// Est-ce que le tableau de notes contient la note maximale 20 ?
//if($meilleure_note == 20) {
//    echo "Un/e élève a eu 20 !";
//}

if(in_array(20,$notes_eleves)) {
    echo "Un/e élève a eu 20 !";
} else {
    echo "personne n'a eu 20 :(";
}

// debug
//echo "salut";


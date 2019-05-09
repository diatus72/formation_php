<?php
// Vérifier la session
require 'session_check.php';
// Récupérer les datas du form
$etat_civil = isset($_POST['etat_civil']) ? $_POST['etat_civil'] : null ;
$animaux = isset($_POST['animaux']) ? $_POST['animaux'] : [];
// Créer un cookie en fonction
// time() + 60scdes(1mn) * 60 mn(1h) * 24h * nb_jours >
setcookie("etat_civil",$etat_civil,time()+60*60*24*365);

if(count($animaux) > 0) {
    // Conversion du tableau en string
//    $animaux_str = implode('-',$animaux);
    $animaux_str = serialize($animaux);
    setcookie("animaux",$animaux_str,time()+60*60*24*7);
}
header('Location: moncompte.php');
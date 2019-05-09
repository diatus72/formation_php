<?php

$produit = ['marque'=>'adidas',
            'modele'=>"Stan Smith",
            'prix_ht'=>55,
            'description'=>"super basket adidas",
            'is_online'=>true];

$produit2 = ['marque'=>"nike",'modele'=>'air max','prix_ht'=>65,'description'=>"super basket Nike",'is_online'=>true];

$produit3 = ['marque'=>'New Balance','modele'=>'MI373',"Basket New Balance",'prix_ht'=>75,'description'=>"super basket New Balance",'is_online'=>false];

$images =['stan_smith.jpg','air_max.jpg','mi373.jpg'];

$produits = [$produit,$produit2,$produit3];

// Ex foreach
foreach($produit as $cle=> $v) {
    echo $cle.": ".$v.PHP_EOL;
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 900px;

        }

        table,tr,td,th {
            border: 1px solid #000;
            text-align: center;
        }
    </style>
</head>
<body>
<div>
    <h1>Gestion des produits</h1>
    <table>
        <thead>
            <tr>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Prix HT</th>
                <th>Prix TTC</th>
                <th>Desc.</th>
                <th>Photo</th>
                <th>En stock</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>ADIDAS</td>
            <td>Stan Smith</td>
            <td>55.00 € HT</td>
            <td>66.00 € TTC</td>
            <td>10 premiers cars de la desc</td>
            <td><img width="50" src="img/stan_smith.jpg" alt="Stan Smith"></td>
            <td><img width="16" src="img/diode-verte.png" alt="En stock"></td>
        </tr>
        </tbody>


    </table>
</div>

</body>
</html>

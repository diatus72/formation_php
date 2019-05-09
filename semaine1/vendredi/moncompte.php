<?php
require 'session_check.php';
$cookie_etat_civil = isset($_COOKIE['etat_civil']) ? $_COOKIE['etat_civil']: null ;
$cookie_animaux = isset($_COOKIE['animaux']) ? unserialize($_COOKIE['animaux']): null ;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php if(in_array('chat',$cookie_animaux)) :?>
<!--// chaton-->
<img src="https://media.giphy.com/media/A0aEq3RE7OFbi/giphy.gif" alt="">
<?php endif ?>

<?php if(in_array('cochon',$cookie_animaux)) :?>
<!--// cochon-->
<img src="https://media.giphy.com/media/g07jGrqV4Lt3y3ysre/giphy.gif" alt="">
<?php endif ?>

<?php if($cookie_etat_civil == "celibataire") :?>
<!--// meetic-->
    <a href="https://www.meetic.fr?tracking_id=44646" target="_blank">
<img src="img/banniere_meetic_blanche_300x600.gif" alt="">
    </a>
<?php endif ?>

</body>
</html>

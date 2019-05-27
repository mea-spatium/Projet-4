<html>
<body>
<link rel="stylesheet" href="https://padded-bilge.000webhostapp.com/full.css">
<div class="autour">
<?php
date_default_timezone_set("Europe/Paris");
$horaire = date('d-m-Y H:i:s', strtotime($_GET['horaire']));
$horaireurl = date('Y-m-d', strtotime($_GET['horaire']));
$horaireurl2 = date('H', strtotime($_GET['horaire']));
$horaireurl3 = date('i', strtotime($_GET['horaire']));
$lien = 'http://chart.apis.google.com/chart?cht=qr&chs=150x150&chl=https://padded-bilge.000webhostapp.com/tktester-get.php?horaire='.$horaireurl.'T'.$horaireurl2.'%3A'.$horaireurl3;
$time = date('d-m-Y H:i:s',time());
$cinqmin = date('d-m-Y H:i:s', strtotime("+5 minutes"));
$quinzemin = date('d-m-Y H:i:s', strtotime("+15 minutes"));
$trentemin = date('d-m-Y H:i:s', strtotime("+30 minutes"));
$quarantemin = date('d-m-Y H:i:s', strtotime("+45 minutes"));
$uneh = date('d-m-Y H:i:s', strtotime("+1 hours"));
$unehquinze = date('d-m-Y H:i:s', strtotime("+1 hours 15 minutes"));
$unehtrente = date('d-m-Y H:i:s', strtotime("+1 hours 30 minutes"));
$unehquarante = date('d-m-Y H:i:s', strtotime("+1 hours 45 minutes"));
$deuxh = date('d-m-Y H:i:s', strtotime("+2 hours"));
$deuxhtrente = date('d-m-Y H:i:s', strtotime("+2 hours 30 minutes"));
$troish = date('d-m-Y H:i:s', strtotime("+3 hours"));
$troishtrente = date('d-m-Y H:i:s', strtotime("+3 hours 30 minutes"));
$quatreh = date('d-m-Y H:i:s', strtotime("+4 hours"));
$quatrehtrente = date('d-m-Y H:i:s', strtotime("+4 hours 30 minutes"));
$cinqh = date('d-m-Y H:i:s', strtotime("+5 hours"));
$cinqhtrente = date('d-m-Y H:i:s', strtotime("+5 hours 30 minutes"));
$sixh = date('d-m-Y H:i:s', strtotime("+6 hours"));
$septh = date('d-m-Y H:i:s', strtotime("+7 hours"));
$huith = date('d-m-Y H:i:s', strtotime("+8 hours"));
$neufh = date('d-m-Y H:i:s', strtotime("+9 hours"));
$dixh = date('d-m-Y H:i:s', strtotime("+10 hours"));
$onzeh = date('d-m-Y H:i:s', strtotime("+11 hours"));
$douzeh = date('d-m-Y H:i:s', strtotime("+12 hours"));
$dixhuith = date('d-m-Y H:i:s', strtotime("+18 hours"));
$vingtquatreh = date('d-m-Y H:i:s', strtotime("+1 days"));
?>
<p>
<?php
echo '<img id="imageQRcode" src="'.$lien.'" alt="QR Code" name="imageQRcode" />';
?>
</p>
<p>
<?php echo 'Date d\' arrivée : '.  $time . "\n"; ?> 
</p>
<p>
<?php if ($horaire > $time) {
  echo 'Sa marche : '. $horaire . "\n" ;
}
 ?> </p>


</div>
</body>
</html>
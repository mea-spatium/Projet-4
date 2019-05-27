<html>
<body>
<link rel="stylesheet" href="https://padded-bilge.000webhostapp.com/full.css">
<div class="autour">
<form action="" method="post">
<?php 
date_default_timezone_set("Europe/Paris");
$horaire = date('Y-m-d H:i:s', strtotime($_POST['horaire']));
$horairus = date('Y-m-d H:i:s', strtotime($_POST['horairus']));
$time = date('Y-m-d H:i:s',time());
if ($horairus > $horaire) {
	echo "papyrus";
}


 ?>
<input type="datetime-local" name="horairus">
<input type="submit">

</div>
</body>
</html>
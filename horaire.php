<html>
<body>
<link rel="stylesheet" href="https://padded-bilge.000webhostapp.com/full.css">
<div class="autour">
<?php
date_default_timezone_set("Europe/Paris");
$horaire = date('Y-m-d H:i:s', strtotime($_POST['horaire']));
$time = date('Y-m-d H:i:s',time());
?>
<p>
<?php echo 'Date d\' arrivée : '.  $time . "\n"; ?> 
</p>
<p>
<?php if ($horaire > $time) {
	echo 'Sa marche : '. $horaire . "\n" ;
}
 ?> </p>
<iframe id="myframe" src="https://padded-bilge.000webhostapp.com/iframe.html"></iframe>

<p>Pour essayer de sortir cliquer sur le bouton.</p>

<p id="demo"></p>

<button onclick="myFunction()">Sortir</button>

<script>
var horaire = '<?PHP echo $horaire;?>';
var time = '<?PHP echo $time;?>';
if (horaire > time) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.body.style.backgroundImage = "url('https://image.noelshack.com/fichiers/2019/06/2/1549362871-barriere-ouverte.png')";
}
}

</script>
</div>
</body>
</html>
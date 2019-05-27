<html>
<body>
<link rel="stylesheet" href="https://padded-bilge.000webhostapp.com/full.css">
<div class="autour">
<form action="" method="post">
horaire :<br>
<input type="datetime-local" name="horaire">
<button type="submit" onclick="myFunction()">Validew</button>
<?php
date_default_timezone_set("Europe/Paris");
$horaire = date('Y-m-d H:i:s', strtotime($_POST['horaire']));
$time = date('Y-m-d H:i:s',time());
?>
<p>
<?php echo 'Date d\' arrivée : '.  $time . "\n"; ?> 
</p>

<iframe id="myframe" src="https://padded-bilge.000webhostapp.com/iframe.html"></iframe>

<p>Click the button to change the background color of the document contained in the iframe.</p>

<p id="demo"></p>



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
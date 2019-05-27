<html>
<body>
<link rel="stylesheet" href="https://padded-bilge.000webhostapp.com/full.css">
<div class="autour">
<?php
date_default_timezone_set("Europe/Paris");
$horaire = date('d-m-Y H:i:s', strtotime($_POST['horaire']));
$forfait11 = isset($_POST['forfait11']);
$forfait22 = isset($_POST['forfait22']);
$forfait33 = isset($_POST['forfait33']);
$forfait44 = isset($_POST['forfait44']);
$forfait55 = isset($_POST['forfait55']);
$forfait66 = isset($_POST['forfait66']);
$forfait77 = isset($_POST['forfait77']);
$forfait1 = date('d-m-Y H:i:s', strtotime('+1 days'));
$forfait2 = date('d-m-Y H:i:s', strtotime('+2 days'));
$forfait3 = date('d-m-Y H:i:s', strtotime('+3 days'));
$forfait4 = date('d-m-Y H:i:s', strtotime('+4 days'));
$forfait5 = date('d-m-Y H:i:s', strtotime('+5 days'));
$forfait6 = date('d-m-Y H:i:s', strtotime('+6 days'));
$forfait7 = date('d-m-Y H:i:s', strtotime('+7 days'));
$time = date('d-m-Y H:i:s',time());


?>
<p>
<?php 
  if ($forfait11 == '1 jours') {
   echo 'Date limite de sortie : '. date('d-m-Y H:i:s', strtotime('+1 days')) ."\n";
} elseif ($forfait22 == '2 jours') {
  echo 'Date limite de sortie : '. date('d-m-Y H:i:s', strtotime('+2 days')) ."\n";
} elseif ($forfait33 == '3 jours') {
  echo 'Date limite de sortie : '. date('d-m-Y H:i:s', strtotime('+3 days')) ."\n";
} elseif ($forfait44 == '4 jours') {
  echo 'Date limite de sortie : '. date('d-m-Y H:i:s', strtotime('+4 days')) ."\n";
} elseif ($forfait55 == '5 jours') {
  echo 'Date limite de sortie : '. date('d-m-Y H:i:s', strtotime('+5 days')) ."\n";
} elseif ($forfait66 == '6 jours') {
  echo 'Date limite de sortie : '. date('d-m-Y H:i:s', strtotime('+6 days')) ."\n";
} elseif ($forfait77 == '7 jours') {
  echo 'Date limite de sortie : '. date('d-m-Y H:i:s', strtotime('+7 days')) ."\n";
} else {
  echo 'Date limite de sortie : '. date('d-m-Y H:i:s', strtotime('+60 days')) ."\n";
}
?> 
</p>

<iframe id="myframe" src="https://padded-bilge.000webhostapp.com/iframe.html"></iframe>

<p>Cliquez pour insérer votre ticket.</p>

<p id="demo"></p>

<button onclick="myFunction()">Insérer ticket</button>

<script>
var time = '<?PHP echo $time;?>';
var horaire = '<?PHP echo $horaire;?>';
var forfait11 = '<?PHP echo $forfait11;?>';
var forfait22 = '<?PHP echo $forfait22;?>';
var forfait33 = '<?PHP echo $forfait33;?>';
var forfait44 = '<?PHP echo $forfait44;?>';
var forfait55 = '<?PHP echo $forfait55;?>';
var forfait66 = '<?PHP echo $forfait66;?>';
var forfait77 = '<?PHP echo $forfait77;?>';
var forfait1 = '<?PHP echo $forfait1;?>';
var forfait2 = '<?PHP echo $forfait2;?>';
var forfait3 = '<?PHP echo $forfait3;?>';
var forfait4 = '<?PHP echo $forfait4;?>';
var forfait5 = '<?PHP echo $forfait5;?>';
var forfait6 = '<?PHP echo $forfait6;?>';
var forfait7 = '<?PHP echo $forfait7;?>';



if (forfait11 && time > horaire && time < forfait1) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.body.style.backgroundImage = "url('https://image.noelshack.com/fichiers/2019/06/2/1549362871-barriere-ouverte.png')";
  y.body.style.backgroundSize = "220px";
  y.body.style.backgroundRepeat = "no-repeat";
  y.getElementById("dodox").innerHTML = "Merci pour votre visite.";
}
}
else if (forfait22 && time > horaire && time < forfait2) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.body.style.backgroundImage = "url('https://image.noelshack.com/fichiers/2019/06/2/1549362871-barriere-ouverte.png')";
  y.body.style.backgroundSize = "220px";
  y.body.style.backgroundRepeat = "no-repeat";
  y.getElementById("dodox").innerHTML = "Merci pour votre visite.";
}
}
else if (forfait33 && time > horaire && time < forfait3) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.body.style.backgroundImage = "url('https://image.noelshack.com/fichiers/2019/06/2/1549362871-barriere-ouverte.png')";
  y.body.style.backgroundSize = "220px";
  y.body.style.backgroundRepeat = "no-repeat";
  y.getElementById("dodox").innerHTML = "Merci pour votre visite.";
}
}
else if (forfait44 && time > horaire && time < forfait4) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.body.style.backgroundImage = "url('https://image.noelshack.com/fichiers/2019/06/2/1549362871-barriere-ouverte.png')";
  y.body.style.backgroundSize = "220px";
  y.body.style.backgroundRepeat = "no-repeat";
  y.getElementById("dodox").innerHTML = "Merci pour votre visite.";
}
}
else if (forfait55 && time > horaire && time < forfait5) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.body.style.backgroundImage = "url('https://image.noelshack.com/fichiers/2019/06/2/1549362871-barriere-ouverte.png')";
  y.body.style.backgroundSize = "220px";
  y.body.style.backgroundRepeat = "no-repeat";
  y.getElementById("dodox").innerHTML = "Merci pour votre visite.";
}
}
else if (forfait66 && time > horaire && time < forfait6) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.body.style.backgroundImage = "url('https://image.noelshack.com/fichiers/2019/06/2/1549362871-barriere-ouverte.png')";
  y.body.style.backgroundSize = "220px";
  y.body.style.backgroundRepeat = "no-repeat";
  y.getElementById("dodox").innerHTML = "Merci pour votre visite.";
}
}
else if (forfait77 && time > horaire && time < forfait7) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.body.style.backgroundImage = "url('https://image.noelshack.com/fichiers/2019/06/2/1549362871-barriere-ouverte.png')";
  y.body.style.backgroundSize = "220px";
  y.body.style.backgroundRepeat = "no-repeat";
  y.getElementById("dodox").innerHTML = "Merci pour votre visite.";
}
}
else {
  function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.body.style.backgroundSize = "220px";
  y.body.style.backgroundRepeat = "no-repeat";
  y.getElementById("dodox").innerHTML = "Problème il y'a.";
}
}

</script>

</div>
</body>
</html>
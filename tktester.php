<html>
<body>
<link rel="stylesheet" href="https://padded-bilge.000webhostapp.com/full.css">
<div class="autour">
<?php
date_default_timezone_set("Europe/Paris");
$horaire = date('d-m-Y H:i:s', strtotime($_POST['horaire']));
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
<?php echo 'Date d\' arrivée : '.  $time . "\n"; ?> 
</p>
<p>
<?php if ($horaire > $time) {
	echo 'Sa marche : '. $horaire . "\n" ;
}
 ?> </p>
<iframe id="myframe" src="https://padded-bilge.000webhostapp.com/iframe.html"></iframe>

<p>Cliquez pour insérer votre ticket.</p>

<p id="demo"></p>

<button onclick="myFunction()">Insérer ticket</button>

<script>
var horaire = '<?PHP echo $horaire;?>';
var time = '<?PHP echo $time;?>';
var cinqmin = '<?PHP echo $cinqmin;?>';
var quinzemin = '<?PHP echo $quinzemin;?>';
var trentemin = '<?PHP echo $trentemin;?>';
var quarantemin = '<?PHP echo $quarantemin;?>';
var uneh = '<?PHP echo $uneh;?>';
var unehquinze = '<?PHP echo $unehquinze;?>';
var unehtrente = '<?PHP echo $unehtrente;?>';
var unehquarante = '<?PHP echo $unehquarante;?>';
var deuxh = '<?PHP echo $deuxh;?>';
var deuxhtrente = '<?PHP echo $deuxhtrente;?>';
var troish = '<?PHP echo $troish;?>';
var troishtrente = '<?PHP echo $troishtrente;?>';
var quatreh = '<?PHP echo $quatreh;?>';
var quatrehtrente = '<?PHP echo $quatrehtrente;?>';
var cinqh = '<?PHP echo $cinqh;?>';
var cinqhtrente = '<?PHP echo $cinqhtrente;?>';
var sixh = '<?PHP echo $sixh;?>';
var septh = '<?PHP echo $septh;?>';
var huith = '<?PHP echo $huith;?>';
var neufh = '<?PHP echo $neufh;?>';
var dixh = '<?PHP echo $dixh;?>';
var onzeh = '<?PHP echo $onzeh;?>';
var douzeh = '<?PHP echo $douzeh;?>';
var dixhuith = '<?PHP echo $dixhuith;?>';
var vingtquatreh = '<?PHP echo $vingtquatreh;?>';

if (horaire > time && horaire < cinqmin) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "0.50";
}
}
else if (horaire > cinqmin && horaire < quinzemin) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "1€";
}
}
else if (horaire > quinzemin && horaire < trentemin) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "2€";
}
}
else if (horaire > trentemin && horaire < quarantemin) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "3€";
}
}
else if (horaire > quarantemin && horaire < uneh) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "4€";
}
}
else if (horaire > uneh && horaire < unehquinze) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "4€";
}
}
else if (horaire > unehquinze && horaire < unehtrente) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "5€";
}
}
else if (horaire > unehtrente && horaire < unehquarante) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "6€";
}
}
else if (horaire > unehquarante && horaire < deuxh) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "7€";
}
}
else if (horaire > deuxh && horaire < deuxhtrente) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "8€";
}
}
else if (horaire > deuxhtrente && horaire < troish) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "9€";
}
}
else if (horaire > troish && horaire < troishtrente) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "10€";
}
}
else if (horaire > troishtrente && horaire < quatreh) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "11€";
}
}
else if (horaire > quatreh && horaire < quatrehtrente) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "12€";
}
}
else if (horaire > quatrehtrente && horaire < cinqh) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "13€";
}
}
else if (horaire > cinqh && horaire < cinqhtrente) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "14€";
}
}
else if (horaire > cinqhtrente && horaire < sixh) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "15€";
}
}
else if (horaire > sixh && horaire < septh) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "16€";
}
}
else if (horaire > septh && horaire < huith) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "17€";
}
}
else if (horaire > huith && horaire < neufh) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "18€";
}
}
else if (horaire > neufh && horaire < dixh) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "19€";
}
}
else if (horaire > dixh && horaire < onzeh) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "20€";
}
}
else if (horaire > onzeh && horaire < douzeh) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "21€";
}
}
else if (horaire > douzeh && horaire < dixhuith) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "22€";
}
}
else if (horaire > dixhuith && horaire < vingtquatreh) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "25€";
}
}
else if (horaire > vingtquatreh) {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.getElementById("dodox").innerHTML = "30€";
}
}
else {
function myFunction() {
  var x = document.getElementById("myframe");
  var y = x.contentWindow.document;
  y.body.style.backgroundImage = "url('https://image.noelshack.com/fichiers/2019/06/2/1549362871-barriere-ouverte.png')";
  y.body.innerHTML = "<br> <br> <br> <br> <br> <br> Problème ???";
}
}



</script>
</div>
</body>
</html>
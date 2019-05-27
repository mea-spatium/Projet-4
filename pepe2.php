<html>
<body align="center">

<?php
$genre = $_POST['genre'];
$name = $_POST['name'];
$email = $_POST['email'];
echo 'Votre nom :' . "\r\n" . $name . "\r\n" ;
echo 'Votre email :' . "\r\n" . $email . "\r\n";
if ($genre == '3 jours') {
   echo 'Semaine prochaine : '. date('Y-m-d H:i:s', strtotime('+3 days')) ."\n";
} elseif ($genre == '7 jours') {
  echo 'Semaine prochaine : '. date('Y-m-d H:i:s', strtotime('+7 days')) ."\n";
} else {
   echo 'Semaine prochaine : '. date('Y-m-d H:i:s', strtotime('+60 days')) ."\n";
}
?>
</body>
</html>
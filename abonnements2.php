<html>
<body>
<?php
// Server
$servername = "localhost";
$database = "id8577910_dbz";
$username = "id8577910_yass";
$password = "Eponge00";

// HTML
$nom = $_POST['nom'];
$debut = date('Y-m-d', strtotime($_POST['debut']));
$fin = date('Y-m-d', strtotime($_POST['fin']));
$paiement = $_POST['paiement'];
$num = $_POST['num'];

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO Abonnés (Nom, Début, Fin, Paiement, Num) VALUES ('$nom', '$debut', '$fin', '$paiement', '$num')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

</body>
</html>
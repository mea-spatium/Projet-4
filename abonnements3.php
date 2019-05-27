<html>
<body>
<link rel="stylesheet" href="https://padded-bilge.000webhostapp.com/full.css">
<div class="autour">
<?php
// Server
define('DB_SERVER', "localhost");
define('DB_DATABASE', "id8577910_dbz");
define('DB_USERNAME', "id8577910_yass");
define('DB_PASSWORD', "Eponge00");
$a = "1";
$b = "1";
// Create connection
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Nom, Début, Fin, Paiement, Num FROM Abonnés";
$result = $conn->query($sql);

if ($a == $b) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nom: " . $row["Nom"]. " - Début: " . $row["Début"]. " - Fin: " . $row["Fin"]. " - Paiement: " . $row["Paiement"]. "€" . " - n° d'abo " . $row["Num"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</body>
</html>
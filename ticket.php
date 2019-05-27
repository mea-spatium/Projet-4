<html>
<body>
<link rel="stylesheet" href="https://padded-bilge.000webhostapp.com/full.css">
<div class="autour"> 
<?php
date_default_timezone_set("Europe/Paris");
$time = time();
?>

<p>
<?php echo 'Date d\' arrivée : '. date('Y-m-d H:i:s', $time) . "\n" ; ?> 
</p>
<p>
<?php echo 'Date limite de sortie : '. date('Y-m-d H:i:s', strtotime('+5 minutes')) ."\n";
?> 
</p>
</div>
</body>
</html>
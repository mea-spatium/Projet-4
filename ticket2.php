<html>  
<body>
<link rel="stylesheet" href="https://padded-bilge.000webhostapp.com/full.css">
<div class="autour"> 
<form action="https://padded-bilge.000webhostapp.com/ticket.php" method="post">
horaire :<br>
<p>
<?php 
$time = time();
echo 'Date d\' arrivée : '. date('Y-m-d H:i:s', $time) . "\n" ; ?> </p>
<input type="submit">
</form>
</div>
</body>
</html>
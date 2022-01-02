<?php
$url = "https://www.bitstamp.net/api/ticker/";
$fgc = file_get_contents($url);
$json = json_decode($fgc, true);

$price = $json["last"];
?>
<!DOCTYPE html>
<html>
<header>
<meta>
</meta>
  <p><h1><b>Money Man’s Investment</b></h1></p>
</header>
<body>
Money Man was paid an advance of <b>14.72303252</b> Bitcoin or <b>$1,000,000</b> on <b>November 9th, 2021</b>. This same <b>14.72303252</b> bitcoin is currently worth <?php echo $price; ?>.<br><br>

This means he’s made/lost _____ <br><br>
For a _____% loss/profit
<br><br>

  
<h4>The Current Price of Bitcoing is currently...</h4>
 
  
</body>
</html>

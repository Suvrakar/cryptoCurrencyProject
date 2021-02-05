<?php
    include "header.php";
    include "navbar.php";

?>




<!DOCTYPE html>

	<html>
		<head>
			<title>Convert Crypto Coin</title>
		
		</head>
		


<p>
  <label>Crypto Coin</label>
  <input id="input" type="number" placeholder="Crypto Coin" oninput="cryptoConverter(this.value)" onchange="cryptoConverter(this.value)">
</p>
<p>Ethereum: <span id="outputEthereum"></span></p>
<p>Teather: <span id="outputTeather"></span></p>
<p>Litecoin (LTC): <span id="outputLitecoin"></span></p>
<p>Steller : <span id="outputSteller"></span></p>

<script>
function cryptoConverter(valNum) {
  valNum = parseFloat(valNum);
  document.getElementById("outputEthereum").innerHTML=valNum*0.025030;
  document.getElementById("outputTeather").innerHTML=valNum*621.94214446;
  document.getElementById("outputLitecoin").innerHTML=valNum*4.81;
  document.getElementById("outputSteller").innerHTML=valNum*4,230;
  
  
  
}
</script>

		
		
	</html>	
		
	
	
	
	
	
	
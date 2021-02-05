<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/forge/0.8.2/forge.all.min.js"></script>

    <script type="text/Javascript">
        function generateHash(valNum)
	{
			valNum = parseFloat(valNum);
	
            var plainText = document.getElementById('plainText').value;
			var md = forge.md.sha256.create();  
            md.start();  
            md.update(plainText, "utf8");  
            var hashText = md.digest().toHex();  
            document.getElementById("hashText").innerHTML = hashText;
        }        
    </script>
</head>
<body>
    

	<br><strong>Enter the Sample Text : </strong><input id='plainText' type='text' oninput="generateHash(this.value)" onchange="generateHash(this.value)" />

	<br><br><strong>Hashed Text (SHA256)  : </strong><span id='hashText'></span>

	<br><br><button onclick="generateHash()">Calculate Hash</button>
</body>



</html>





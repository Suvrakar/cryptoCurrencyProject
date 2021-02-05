<?php
    include "header.php";
    include "navbar.php";

    if (isset($_GET['loginFailed'])) {
        $message = "Invalid Credentials ! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css">
</head>

<body>
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header"></h1>
            </div>
        </div>
	
		 
		 
  <div class="flex-container">
            <div class="flex-item-1">
		 
		<p>Crypto Coin is a cryptocurrecy. A cryptocurrency (or crypto currency or crypto for short) is a digital asset designed to work as a medium of exchange wherein individual coin ownership records are stored in a ledger existing in a form of computerized database using strong cryptography to secure transaction records, to control the creation of additional coins, and to verify the transfer of coin ownership.[1][2] It typically does not exist in physical form (like paper money) and is typically not issued by a central authority. Cryptocurrencies typically use decentralized control as opposed to centralized digital currency and central banking systems.[3] When a cryptocurrency is minted or created prior to issuance or issued by a single issuer, it is generally considered centralized </p>

		</div>	
			</div>
			
    </div>

</body>
</html>

<?php include "easter_egg.php"; ?>

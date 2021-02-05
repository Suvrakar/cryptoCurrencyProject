<?php
    include "validate_customer.php";
    include "header.php";
    include "customer_navbar.php";
    include "customer_sidebar.php";
    include "session_timeout.php";

    $id = $_SESSION['loggedIn_cust_id'];

    $sql0 = "SELECT * FROM customer WHERE cust_id=".$id;
    $result0 = $conn->query($sql0);
    $row0 = $result0->fetch_assoc();

    $sql1 = "SELECT * FROM passbook".$id." WHERE trans_id=(
                    SELECT MAX(trans_id) FROM passbook".$id.")";
    $result1 = $conn->query($sql1);
    $row1 = $result1->fetch_assoc();

    if ($row1["debit"] == 0) {
        $transaction = $row1["credit"];
        $type = "credit";
    }
    else {
        $transaction = $row1["debit"];
        $type = "debit";
    }

    $time = strtotime($row1["trans_date"]);
    $sanitized_time = date("d/m/Y, g:i A", $time);

    $sql2 = "SELECT COUNT(*) FROM beneficiary".$id;
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_home_style.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <h1 id="customer">
                Welcome, <?php echo $row0["first_name"] ?>&nbsp<?php echo $row0["last_name"] ?>&nbsp!
                <br>AC/No: <?php echo $row0["account_no"]; ?>
            </h1>
            <p id="customer">
			<?php 
				
		
			
			?>
			
                &#9656 <strong> Wallet (Crypto Coin): </strong> <?php echo number_format($row1["balance"]); ?>/-
				 <br>&#9656 <strong> Wallet Equivalent (Ethereum Coin):</strong> <?php 
				 $var=($row1["balance"]);
			$var2=$var*0.025030;	
			$var3=$var*621.94214446;	
			$var4=$var*4.81;	
				 
				 
				 echo "$var2"; ?>/-
				  <br>&#9656 <strong> Wallet Equivalent (Teather Coin):</strong> <?php 
				 $var=($row1["balance"]);
			$var2=$var*0.025030;	
			$var3=$var*621.94214446;	
			$var4=$var*4.81;	
				 
				 
				 echo "$var3"; ?>/-
				  <br>&#9656 <strong>  Wallet Equivalent (Litecoin Coin): </strong> <?php 
				 $var=($row1["balance"]);
			$var2=$var*0.025030;	
			$var3=$var*621.94214446;	
			$var4=$var*4.81;	
				 
				 
				 echo "$var4"; ?>/-
                <br>&#9656 You have <?php echo $row2["COUNT(*)"]; ?> BlockChain Connection(s).
                <br>&#9656 Your last transaction (<?php echo $type; ?>) of&nbspCoin.&nbsp<?php
                echo number_format($transaction); ?><br>
                on <?php echo $sanitized_time; ?>, was: "<?php echo $row1["remarks"]; ?>".
			
				
            </p>
        </div>
    </div>

</body>
</html>

<?php include "easter_egg.php"; ?>

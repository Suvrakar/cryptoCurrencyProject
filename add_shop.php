<?php
    include "validate_customer.php";
    include "header.php";
    include "customer_navbar.php";
    include "customer_sidebar.php";
    include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer_add_style.css">
</head>

<body>
    <form  action="add_shop_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Please fill in beneficiary details...</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Shop Name :</label><br>
                <input name="$Sname" size="30" type="text" required />
            </div>
  
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Shop Account No :</label><br>
                <input name="$Sno" size="25" type="text" required />
            </div>
        </div>

		<div class="flex-container">
            <div class=container>
                <label>Product No :</label><br>
                <input name="$Pno" size="25" type="text" required />
            </div>
        </div>
		
			<div class="flex-container">
            <div class=container>
                <label>Amount:</label><br>
                <input name=" $Amnt" size="25" type="text" required />
            </div>
        </div>
        <div class="flex-container">
            <div class="container">
                <a href="/beneficiary.php" class="button">Go Back</a>
            </div>

            <div class="container">
                <button type="submit">Confirm</button>
            </div>

            <div class="container">
                <button type="reset" class="reset" onclick="return confirmReset();">Reset</button>
            </div>
        </div>

    </form>

    <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>

</body>
</html>

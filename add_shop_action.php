<?php
    include "validate_customer.php";
    include "header.php";
    include "customer_navbar.php";
    include "customer_sidebar.php";
    include "session_timeout.php";
	include "connect.php";

    SSname = mysqli_real_escape_string($conn, $_POST["Sname"]);
    $Sno = mysqli_real_escape_string($conn, $_POST["Sno"]);
    $Pno = mysqli_real_escape_string($conn, $_POST["Pno"]);
    $Amnt = mysqli_real_escape_string($conn, $_POST["Amnt"]);


    $id = $_SESSION['loggedIn_cust_id'];
    $sql0 = "INSERT INTO shopnamea VALUES(
            '$Sname',
            '$Sno',
            '$Pno',
            '$Amnt',
          
        )";
                                              
    $result = $conn->query($sql0);

    $success = 0;
  
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="action_style.css">
</head>

<body>
    <div class="flex-container">
        <div class="flex-item">
            <?php
            if ($success == 1) { ?>
                <p id="info"><?php echo "Beneficiary successfully added !\n"; ?></p>
            <?php } ?>

            <?php
            if ($success == 0) { ?>
                <p id="info"><?php echo "Invalid data entered/Connection error !\n"; ?></p>
            <?php } ?>

            <?php
            if ($success == -1) { ?>
                <p id="info"><?php echo "Can't add self as beneficiary !\n"; ?></p>
            <?php } ?>
        </div>

        <div class="flex-item">
            <a href="/beneficiary.php" class="button">Go Back</a>
        </div>
    </div>

</body>
</html>

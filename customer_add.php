<?php
    include "validate_admin.php";
    include "header.php";
    include "user_navbar.php";
	include "session_timeout.php";
	include "connect.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer_add_style.css">
	  <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/forge/0.8.2/forge.all.min.js"></script>
</head>

<body>

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
	
	
	
	

<?php 

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  $privatekey=password_generate(7)."\n";
  
  $privatekey2=password_generate(12)."\n";
  

  //echo "Your Private Key: ".$privatekey;
  
  
  ?>





    <form class="add_customer_form" action="customer_add_action.php" method="post">
        <div class="flex-container-form_header">
            <h1 id="form_header">Please fill in the following details</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>First Name :</label><br>
                <input name="fname" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Last Name :</b></label><br>
                <input name="lname" size="30" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Gender :</label>
            </div>
            <div class="flex-container-radio">
                <div class="container">
                    <input type="radio" name="gender" value="male" id="male-radio" checked>
                    <label id="radio-label" for="male-radio"><span class="radio">Male</span></label>
                </div>
                <div class="container">
                    <input type="radio" name="gender" value="female" id="female-radio">
                    <label id="radio-label" for="female-radio"><span class="radio">Female</span></label>
                </div>
                <div class="container">
                    <input type="radio" name="gender" value="others" id="other-radio">
                    <label id="radio-label" for="other-radio"><span class="radio">Others</span></label>
                </div>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Date of Birth :</label><br>
                <input name="dob" size="30" type="text" placeholder="yyyy-mm-dd" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Reference No :</label><br>
                <input name="aadhar"    value="<?=  $privatekey2 ?>"  size="25" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Email-ID :</label><br>
                <input name="email" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Phone No. :</b></label><br>
                <input name="phno" size="30" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Address :</label><br>
                <textarea name="address" required /></textarea>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Country :</label>
            </div>
            <div  class=container>
                <select name="branch">
                    <option value="delhi">Bangladesh</option>
                    <option value="newyork">India</option>
                    <option value="paris">Pakistan</option>
                    <option value="riyadh">USA</option>
                    <option value="moscow">Russia</option>
                </select>
            </div>
        </div>
		
		
		<?php
		$sql0 = "SELECT MAX(cust_id) FROM customer";
$result = $conn->query($sql0);
$row = $result->fetch_assoc();
$id = $row["MAX(cust_id)"] + 2;


?>


        <div class="flex-container">
            <div class=container>
                <label>Account No :</label><br>
                <input name="acno" size="25" type="text" required  value="<?= $id ?>" readonly/>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Opening Balance :</label><br>
                <input name="o_balance" size="20" value="500" readonly type="text" required />
            </div>
            <div  class=container>
                <label>Public Key  :</b></label><br>
                <input name="pin" size="15"  value="password123" readonly type="text" required  />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Username :</label><br>
                <input name="cus_uname" size="30" type="text" required />
            </div>
            <div  class=container>
                <label>Private Key :</b></label><br>
                <input  id='plainText' oninput="generateHash(this.value)" onchange="generateHash(this.value) size="30" type="text" required />


	<br><br><strong>Hashed Text (SHA256)  : </strong><span name="cus_pwd" id='hashText'></span>
				
				
				
            </div>
        </div>

        <div class="flex-container">
            <div class="container">
                <button type="submit">Submit</button>
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

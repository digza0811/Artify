<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bill.css">
  </head>
  <body>
      
       <?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'artify';

    $conn = mysqli_connect($server,$user,$pass,$db);

?>
        <?php

            if(isset($_POST['joinbtn']))
            {
                $firstname = mysqli_real_escape_string($conn, $_POST['name']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $address= mysqli_real_escape_string($conn, $_POST['address']);
                $city = mysqli_real_escape_string($conn, $_POST['city']);
                $state = mysqli_real_escape_string($conn, $_POST['state']);
                $zipcode = mysqli_real_escape_string($conn, $_POST['zipcode']?? "");
                $cardname = mysqli_real_escape_string($conn, $_POST['cardname']?? "");
                $cardnumber = mysqli_real_escape_string($conn, $_POST['cardnumber']?? "");
                $expmonth = mysqli_real_escape_string($conn, $_POST['expmonth']?? "");
                $expyear = mysqli_real_escape_string($conn, $_POST['expyear']?? "");
                
                $insert_query = "INSERT INTO bills(name,email,address,city,state,zipcode,cardname,cardnumber,expmonth,expyear)values('$firstname','$email','$address','$city','$state','$zipcode','$cardname','$cardnumber','$expmonth','$expyear')";

                $iquery = mysqli_query($conn,$insert_query);
                if($iquery)
                {
?>
                    <script>alert("Payment Successful")</script>
<?php        
                }

                else
                {
?>
                    <script>alert("Payment Not Successful")</script>
<?php
                }
            }
?>

<p><center><a href="home.php" style="color:#C70039;">Back</a></center></p>

    <h2 style="color:#C70039;">Payment</h2>

    
        <div class="container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="row">
                    <div class="col-50">
                
                        <h3>Billing Address</h3>
                        <div>
                            <label>Full Name</label>
                            <input type="text" name="name" placeholder="Enter Full Name" required>
                        </div>
                    <div>
                        <label>Email</label>
                        <input type='text' name="email" placeholder="Enter Email" required>

                    </div>
                    <div>
                        <label>Address</label>
                        <input type='text' name="address" placeholder="Enter Address" required>

                    </div>
                    <div>
                        <label>City</label>
                        <input type='text' name="city" placeholder="Enter City" required>
                    </div>
                    <div>
                        <label>State</label>
                        <input type='text' name="state" placeholder="Enter State" required>
                    </div>
                    <div>
                        <label>ZipCode</label>
                        <input type='number' name="code" placeholder="Enter ZipCode" required>
                    </div>
                </div>
                <div class="col-50">
                <h3>Card Details</h3>
                    <div>
                        <label>Name On Card</label>
                        <input type="text" name="name" placeholder="Enter Name on Card" required>
                    </div>
                    <div>
                        <label>Card Number</label>
                        <input type='text' name="num" placeholder="Enter Card Number" required>

                    </div>
                    <div>
                        <label>Expiry Month</label>
                        <input type='text' name="month" placeholder="Enter Expiry Month" required>

                    </div>
                    <div>
                        <label>Expiry Year</label>
                        <input type='text' name="year" placeholder="Enter Year" required>
                    </div>
                    <div>
                        <label>CVV</label>
                        <input type='password' name="cvv" placeholder="Enter CVV" required>
                    </div>
                </div>

            <div>
                <button type="submit" name="joinbtn" class="btn" style="background-color: #C70039;">Pay</button>
            </div>
                                
                </div>
            </form>
        </div>
            
            
  
      
    


  </body>
</html>

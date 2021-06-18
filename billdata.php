<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Font Awesome -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
                $firstname = $_POST['firstname'];
                $email = $_POST['email'];
                $address= $_POST['address'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zipcode = $_POST['zipcode'];
                $cardname = $_POST['cardname'];
                $cardnumber = $_POST['cardnumber'];
                $expmonth = $_POST['expmonth'];
                $expyear = $_POST['expyear'];
                
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
        </body>
</html>
<?php

$con = mysqli_connect('localhost','root');

if($con){
  echo "Connection successful";

}else{
  echo "No connection";
}

mysqli_select_db($con,'artify');
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$address= $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$zipcode = $_POST['zipcode'];
$cardname = $_POST['cardname'];
$cardnumber = $_POST['cardnumber'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];

$query = "insert into bill (firstname,email,address,city,state,pincode,zipcode,cardname,cardnumber,expmonth,expyear,cvv)
values('$firstname','$email','$address','$city','$state','$pincode','$zipcode','$cardname,'$cardnumber,'$expmonth,'$expyear,'$cvv)";

mysqli_query($con,$query);

header('location:bill.php');
echo '<script> alert("connection successful") </script>';
 ?>

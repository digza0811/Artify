<?php

$con = mysqli_connect('localhost','root');

if($con){
  echo "Connection successful";

}else{
  echo "No connection";
}

mysqli_select_db($con,'artify');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email= $_POST['email'];
$comment = $_POST['comment'];

$query = "insert into contact (fname,lname,email,comment)
values('$fname','$lname','$email','$comment')";

mysqli_query($con,$query);

header('location:contact.php');
echo '<script> alert("connection successful") </script>';
 ?>

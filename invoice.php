<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
  </head>
  <body>
    <?php
        require 'billdata.php';

        $query = "SELECT * FROM bills";
       $query_run = mysqli_query($conn, $query);

       $row =mysqli_fetch_assoc ($query_run);
        echo $row['id'];
        echo $row['name'];

?>
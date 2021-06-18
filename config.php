<?php
$con = mysqli_connect('localhost', 'root', '', 'artify');

if (mysqli_connect_errno()){
    die("Connection Fail: ". mysqli_connect_error());
}

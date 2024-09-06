<?php 
$host="localhost";
$username="root";
$password="";
$dbname="jermi";

$con=mysqli_connect($host,$username,$password) or die("bata base is note connect");
mysqli_select_db($con,$dbname) or die("bata base is note connect")

 ?>
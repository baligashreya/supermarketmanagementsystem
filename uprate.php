<?php
require 'database1.php';
session_start();
$rate=$_POST['rate'];
$ord=$_POST['ord'];
$query="update orders set rate='$rate' where order_id='$ord'";
if(!mysqli_query($con,$query))
{
	echo "error";
}
$id=$_SESSION['id'];
header("location:order.php?id=$id");
?>
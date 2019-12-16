<?php
require 'database1.php';
session_start();
$pid=$_GET['pid'];
$id=$_SESSION['id'];
$cat=$_SESSION['cat'];
$query="insert into add_cart(prod_id,cust_id) values('$pid','$id')";
$result=mysqli_query($con,$query);
if(!$result)
{
	echo "error";
}
else
header("location:prodcateg.php?category=$cat");
?>
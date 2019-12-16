<?php
require 'database1.php';
session_start();
$id=$_SESSION['id'];
$pid=$_SESSION['pid'];
$date='0000-00-00';
$mod=$_POST['mod'];
$price=$_SESSION['price'];
$query="insert into orders (cust_id,prod_id,order_date,delivery_date,mode_of_payment,order_id,price) values('$id','$pid',CURDATE(),'$date','$mod',0,'$price')";
$result=mysqli_query($con,$query);
if(!$result)
{
	echo "error";
}
$query1="select order_date,order_id from orders where prod_id='$pid' and cust_id='$id' and delivery_date='0000-00-00'";
$result1=mysqli_query($con,$query1);
if(!$result1)
{
	echo "error1";
}
$row=mysqli_fetch_assoc($result1);

$ord_id=$row['order_id'];
$date1=$row['order_date'];
$query2="CALL add_da('$ord_id','$date1');";
$result2=mysqli_query($con,$query2);
if(!$result2)
{
	echo "error2";
}
else
{
$_SESSION['confirm']="confirmed";
header("location:first.php");
}
?>
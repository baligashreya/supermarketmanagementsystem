<?php
require 'database1.php';
if(!$con)
{
	echo "database not connected".mysql_error();
}

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pass=$_POST['pass'];
	$query="insert into customer(cust_name,email_id,phone,password,city,state) values('$name','$email','$phone','$pass','$city','$state')";
	if(!mysqli_query($con,$query))
	{
		echo 'error';
    }
	else
	{
	$query1="select cust_id from customer where email_id='$email'";
	$result1=mysqli_query($con,$query1);
	$row=mysqli_fetch_assoc($result1);
	session_start();
	$_SESSION['id']=$row['cust_id'];	
    header("refresh:0.3;url=first.php");
    }

	
?>

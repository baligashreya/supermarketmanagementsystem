<?php
  session_start();
  require 'database1.php';
  $id=$_SESSION['id'];
  $name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$pass=$_POST['pass'];
	$add=$_POST['add'];
  $add1=$_POST['add1'];
  $query="update customer
          set cust_name='$name',email_id='$email',phone='$phone',password='$pass',state='$add',city='$add1' where cust_id='$id'";
  $result=mysqli_query($con,$query);
  if(!$result)
  echo "error";
  else
  	header("Location:editacc.php");
 ?>
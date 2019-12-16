<?php
session_start();
require 'database1.php';
if(!$con)
{
	echo "database not connected".mysql_error();
}
if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$query="select * from customer";
	$result=mysqli_query($con,$query);
	while ($row=mysqli_fetch_assoc($result))
	 {
		if($row['email_id']==$email && $row['password']==$pass)
		{
			$_SESSION['rusername']="found";
			$_SESSION['id']=$row['cust_id'];
			header("Location:first.php");
		}
		else
		{
			echo "error";
		}
	}

}

?>

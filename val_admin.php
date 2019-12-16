<?php
session_start();
require 'database1.php';
if(!$con)
{
	echo "database not connected".mysql_error();
}

if(isset($_POST['submit']))
{
	$admin=$_POST['admin_id'];
	$pass=$_POST['pass'];
	$query="select * from admin";
	$result=mysqli_query($con,$query);
	while ($row=mysqli_fetch_assoc($result))
	 {
		if($row['admin_id']==$admin && $row['password']==$pass)
		{
			$_SESSION['username']="found";
			$_SESSION['admin_id']=$row['admin_id'];
			header("Location:mainpage.php");
		}
		else
		{
			echo "error";
		}
	}

}

?>

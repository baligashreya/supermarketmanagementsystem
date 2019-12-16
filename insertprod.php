<?php
session_start();
require 'database1.php';
if(!$con)
{
	echo "database not connected".mysql_error();
}

	$prodid=$_POST['prod_id'];
	$name=$_POST['prod_name'];
	$price=$_POST['price'];
	$path=$_POST['path'];
	$path1=$_POST['path1'];
	$spec=$_POST['spec'];
	$man=$_POST['man'];
	$imp=$_POST['imp'];
	$pack=$_POST['packer'];
	$category=$_POST['category'];
	$query="insert into prod(prod_id,prod_name,price,rating,path,path1,category)values('$prodid','$name','$price','0','$path','$path1','$category')";
	$result=mysqli_query($con,$query);
	if(!$result)
	{
		echo 'error';
    }
    $query1="insert into prod_details(prod_id,prod_spec,manufacturer_details,importer_details,packers_details)values('$prodid','$spec','$man','$imp','$pack')";
	$result1=mysqli_query($con,$query1);
	if(!$result1)
	{
		echo 'error1';
    }
    
	else	
		$_SESSION['yes']='yes';
    header("refresh:0.1;url=mainpage.php");

	
?>

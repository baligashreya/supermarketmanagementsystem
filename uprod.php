<?php
session_start();
require 'database1.php';
if(isset($_POST['update']))
{
$prod_id=$_SESSION['pro'];
$prod_name=$_POST['prod_name'];
$path=$_POST['path'];
$price=$_POST['price'];
$prod_spec=$_POST['prod_spec'];
$m_d=$_POST['m_d'];
$i_d=$_POST['i_d'];
$p_d=$_POST['p_d'];
	$query="update prod p,prod_details p1
	set p.prod_name='$prod_name' ,p.path='$path' ,p.price='$price' ,p1.prod_spec='$prod_spec' ,p1.manufacturer_details='$m_d' ,p1.importer_details='$i_d' ,p1.packers_details='$p_d'  
            where p.prod_id=p1.prod_id and p1.prod_id='$prod_id'";
            $result=mysqli_query($con,$query);
            if(!$result)
             {
               echo "error";
             }
             else
             header("location:delprod.php");     
}
if(isset($_POST['delete']))
{ 
	$prod_id=$_SESSION['pro'];
	$query1="delete from prod_details where prod_id=$prod_id";
            $result1=mysqli_query($con,$query1);
            if(!$result1)
             {
               echo "error1";
             }
   $query2="delete from prod where prod_id=$prod_id";
            $result2=mysqli_query($con,$query2);
            if(!$result2)
             {
               echo "error2";
             }
             else
             header("location:mainpage.php");
}
?>
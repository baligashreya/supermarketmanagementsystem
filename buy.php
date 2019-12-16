<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
error_reporting(0);
require 'check.php';
require 'database1.php';
session_start();
$pid=$_GET['pid'];
$_SESSION['pid']=$pid;
$id=$_SESSION['id'];
$query="select * from prod where prod_id='$pid'";
$result=mysqli_query($con,$query);
if(!$result)
{
	echo "error";
}
$row=mysqli_fetch_assoc($result);
$query1="select * from customer where cust_id='$id'";
$result1=mysqli_query($con,$query1);
if(!$result1)
{
	echo "error";
}
$row1=mysqli_fetch_assoc($result1);
$_SESSION['price']=$row['price'];
?>
<div style="margin-top: 100px;"> 
<div class="container mb-5"   style=" background-color: rgba(0, 0, 255,.1);">
		<p class="h2">Product</p>
		<div class="row">
		<img src="">
		</div>
		<div class="row">
			<p class="h5 col-6"><?php echo $row['prod_name']; ?></p>
		</div>
		<div class="row">
			<p class="h5 col-6"><?php echo $row['price']; ?></p>
		</div>
		<div class="row">
			<p class="h5 col-6">Deliver within 3 working days</p>
		</div>
        <form action="confirm.php" method="post">
        	<p class="h4">Select mode of payment</p>
        	<select class="form-control form-control-sm" name="mod">
            <option value="credit-card">credit-card</option>
            <option value="debit-card">debit-card</option>
            </select>
		<p class="h2 mt-4">Customer</p>
		<div class="row">
			<p class="h3 col-3"><?php echo $row1['cust_name']; ?></p>
		</div>
		<div class="row">
			<p class="h5 col-3"><?php echo $row1['phone']; ?></p>
		</div>
		<div class="row">
			<p class="h5 col-3"><?php echo $row1['state']; ?></p>
		</div>
		<div class="row">
			<p class="h5 col-3"><?php echo $row1['city']; ?></p>
		</div>
		<div class="row">
			<p class="h5 col-3"><?php echo $row1['email_id']; ?></p>
		</div>
		<button type="submit" class="btn btn-dark">Confirm</button>
		<button type="button" class="btn btn-dark ml-4 " onclick="
     window.location.href='first.php'">Back</button>
	</form>
	<div class="row">
	<p>  </p>
		<p>  </p>
	</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
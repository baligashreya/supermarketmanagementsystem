<?php
require 'check.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <?php
  error_reporting(0);
  session_start();
  require 'database1.php';
  $id=$_SESSION['id'];
  $query="select * 
        from customer 
        where cust_id='$id'";
  $result=mysqli_query($con,$query);
  $row=mysqli_fetch_assoc($result);
  ?>
	<div style="margin-top: 100px;"> 
	<div class="container"   style=" background-color: rgba(0, 0, 255,.1);">
		<p class="h3"><strong>Edit your Account</strong></p>
	<form action="updateacc.php" method="post">
	<div class="form-row">
		<label for="exampleInputName1">Name</label>
      <input type="text" class="form-control" name="name" value="<?php echo $row['cust_name'];?>">
    </div>
    <div class="form-row">
    <div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="inputEmail4" value="<?php echo $row['email_id'];?>">
    </div>
    </div>
      
    <div class="form-group">
      <label for="inputAddress1">State</label>
      <input type="text" class="form-control" name="add" id="inputAddress" value="<?php echo $row['state'];?>">
      </div>
      <div class="form-group">
      <label for="inputAddress1">City</label>
      <input type="text" class="form-control" name="add1" id="inputAddress" value="<?php echo $row['city'];?>">
      </div>
      <div class="form-row">
    <div class="form-group">
    	<label for="exampleInputNumber1">Mob. number</label>
        <input type="tel" class="form-control" name="phone" id="inputPhoneNumber" value="<?php echo $row['phone'];?>">
    </div>
   </div>
    <div class="form-row">
     <div class="form-group">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="pass" id="inputPassword4" value="<?php echo $row['password'];?>">
    </div>
    </div>
    <div class="row">
  <input type="submit" value="update" name="submit" class="btn btn-dark ml-4 mb-3">
  <button type="button" class="btn btn-dark ml-4 mb-3" onclick="
     window.location.href='first.php'">Back</button>
  </div>
</form>
</div>
</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
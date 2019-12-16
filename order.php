<?php
require 'check.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
  <a class="navbar-brand text-white">Finest Food</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="first.php">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <?php
      error_reporting(0);
      require 'database1.php';
      session_start();
      if(isset($_SESSION['id']))
      {
        $id=$_SESSION['id'];
        $query1="select cust_name from customer where cust_id='$id'";
        $result1=mysqli_query($con,$query1);
        $row1=mysqli_fetch_assoc($result1);
        ?>
        <li class="nav-item">
        <a class="nav-link text-white" href="cart.php">cart</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $row1['cust_name']; ?>
        </a>
        <div class="dropdown-menu bg-dark " aria-labelledby="navbarDropdown">
          <a class="dropdown-item text-white" href="#">Account</a>
          <a class="dropdown-item text-white" href="order.php?id=$id">my orders</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-white" href="log.php">Logout</a>
        </div>
      </li>
      <?php
    }
    else
    {
    ?>
    <li class="nav-item">
        <a class="nav-link text-white" href="sign_in.html">Login</a>
      </li>
      <?php
    }
    ?>
    </ul>
  </div>
</nav>
<p class="h2 ml-3 mt-3">My orders</p>
<?php
$query="select o.order_id,o.prod_id,o.rate,p.prod_name,p.price,p.path from orders o,prod p where p.prod_id=o.prod_id and o.cust_id='$id'";
$result=mysqli_query($con,$query);
if(!$result)
{
  echo "error";
}
while($roww=mysqli_fetch_assoc($result))
{
?>

<div class="container my-5 " style="background-color: rgba(0, 0, 255,.1);">
  <div class="border-dark">
  <img src="<?php echo $roww['path']; ?>" class="mt-2">
<form action="uprate.php" method="post">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Order id</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $roww['order_id']; ?>" name="ord">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Product id</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $roww['prod_id']; ?>" name="pid">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $roww['prod_name']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Product price</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $roww['price']; ?>">
    </div>
  </div>
  <?php
  if($roww['rate']=='0')
  {
    ?>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Rate now</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" name="rate">
      <button type="submit" class="btn btn-dark ml-3 mt-4 mb-2" >Submit</button>
    </div>
  </div>
  <?php
}
?>
</form>
</div>
</div>
<?php
}
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
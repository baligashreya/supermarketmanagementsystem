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
          <a class="dropdown-item text-white" href="editacc.php">Account</a>
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
	<div class="container mt-5">
		<div class="row">
			<p class="h3 ml-3">My cart</p>
		</div>
		<?php
		require 'database1.php';
		session_start();
		$cust_id=$_SESSION['id'];
		if(isset($cust_id))
		{
		$query="select p.prod_id,p.path,p.prod_name,p.price,p.rating from prod p,add_cart c where
		p.prod_id=c.prod_id and  c.cust_id='$cust_id'";
		$result=mysqli_query($con,$query);

		if(!$result)
		{
			echo "error";
		}
		while($row=mysqli_fetch_assoc($result))
		{
		?>
<div class="card mb-3 border-dark" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-3 mh-100">
      <img src="<?php echo $row['path']; ?>" class="card-img" >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title text-dark"><?php echo $row['prod_name']; ?></h5>
        <p class="card-text"><?php echo $row['price']; ?></p>
        <p class="card-text"><small class="text-muted"><?php echo $row['rating']; ?></small></p>
          <a type="button" class="btn btn-dark rounded" href="buy.php?pid=<?php echo $row['prod_id']; ?>">Buy now</a>
      </div>
    </div>
  </div>
</div>
<?php
}
}
else
{
?>
<div class="container"><p class="h3">No items in cart</p></div>
<?php
}
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>	
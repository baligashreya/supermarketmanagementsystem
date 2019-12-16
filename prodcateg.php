
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
	<?php
	require 'database1.php';
	$category=$_GET['category'];
	$_SESSION['cat']=$_GET['category'];
	$query="select * from prod p,prod_details p1 where p1.prod_id=p.prod_id and p.category='$category'";
	$result=mysqli_query($con,$query);
	if(!$result)
	{
		echo "error";
	}
	?>
	<p class="h1 mt-4 ml-1"><?php echo $category; ?></p>
		
	<?php 
	while($row=mysqli_fetch_assoc($result))
	{ 
		?>
<div class="card-deck">
  <div class="card col-3 m-5 rounded">
    <img src="<?php echo $row['path']; ?>" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['prod_name']; ?></h5>
      <p class="card-text">rs.<?php echo $row['price']; ?></p>
      <p class="card-text">Rating-<?php echo $row['rating']; ?></p>
      <a type="button" class="btn btn-dark rounded" href="buy.php?pid=<?php echo $row['prod_id']; ?>">Buy now</a>
      <?php
      if(isset($_SESSION['id']))
      {
      	?>
      <button type="button" class="btn btn-dark" onclick="location.href='insertcart.php?pid=<?php echo $row['prod_id']; ?>'">Add to cart</button>
      <?php
  }
  ?>
      <div class="container mt-3">
      	<p class="h6 ">More details:-</p>
      <div class="row ">
       <p class="col-6">specs:</p>
       <p class="col-6"><?php echo $row['prod_spec']; ?></p>
      </div>
      <div class="row ">
       <p class="col-6">Manufacturer:</p>
       <p class="col-6"><?php echo $row['manufacturer_details']; ?></p>
      </div>
      <div class="row ">
       <p class="col-6">Packer:</p>
       <p class="col-6"><?php echo $row['packers_details']; ?></p>
      </div>
      <div class="row ">
       <p class="col-6">Importer:</p>
       <p class="col-6"><?php echo $row['importer_details']; ?></p>
      </div>
  </div>
</div>
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
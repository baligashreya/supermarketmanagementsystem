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
<div style=" background-color: rgba(0, 0, 255,.1);">
	<div class="container  rounded">
		<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <a href="prodcateg.php?category=Sweets, Chocolate and Gum">
      <div class="carousel-item active">
        <img src="GulabJamun.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class=" text-white">Sweets</h5>
          <p class=" text-white">Gulab jamun</p>
        </div>
      </div>
    </a>
    <a href="prodcateg.php?category=cooking and baking supplies">
      <div class="carousel-item">
        <img src="paperboat.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-dark">Beverages</h5>
          <p class="text-dark">Paper Boat</p>
        </div>
      </div>
    </a>
    <a href="prodcateg.php?category=Canned and Jarred Food">
      <div class="carousel-item">
        <img src="alphonso_mango.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-dark">Canned items</h5>
          <p class="text-dark">mango</p>
        </div>
      </div>
    
  </a>
  </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
	</div>
</div>
<?php
require 'database1.php';
if(!$con)
{
  echo "error";
}
$query="select distinct category,path1 from prod group by category";
$result=mysqli_query($con,$query);
if(!$result)
{
  echo "error1";
}
?>
<div class="row">
  <?php
while($row=mysqli_fetch_assoc($result))
{
?>
  <a href="prodcateg.php?category=<?php echo $row['category']; ?>" style="text-decoration: none;">
	<div class="card container col-11 m-5 border-dark" style="width: 18rem;">
  <img src="<?php echo $row['path1']; ?>" class="card-img-top" >
  <div class="card-body">
    <p class="card-text h2"><?php echo $row['category'];?></p>
  </div>
</div>
</a>
<?php
}
?>
</div>
<?php
      
      $c=$_SESSION['confirm'];
      if($c=='confirmed')
      {
        ?>
        <script type="text/javascript">
          alert('ordered successfully');
        </script>
        <?php
        
    }
    unset($_SESSION['confirm']);
      ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
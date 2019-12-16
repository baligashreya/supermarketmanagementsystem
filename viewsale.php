<?php
require 'check1.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row mt-5">
	<form action="viewsale.php" method="post">
		<p class="h5">Filter by date</p>
				<div class="form-row">
                <div class="form-group col-12">
      			<input type="date" class="form-control" name="date" placeholder="Enter date">
  				</div>
  			</div>
  				<div class="form-row">
                <div class="form-group col-12">
                	<button type="submit" class="btn btn-dark mb-3  col-11" name="submittt">Filter</button>
                	
    		</div>
			</div>
		</form>
</div>
<?php
require 'database1.php';
if(isset($_POST['submittt']))
{
	$date=$_POST['date'];
	$query="select * from orders where order_date='$date'";
	$query1="select SUM(price) as sum from orders where order_date='$date'";
            $result=mysqli_query($con,$query);
            if(!$result)
             {
               echo "error";
             }
             $result1=mysqli_query($con,$query1);
            if(!$result1)
             {
               echo "error";
             }
           $row1=mysqli_fetch_assoc($result1);
}
else
{
	$query="select * from orders";
	$query1="select SUM(price) as sum from orders";
            $result=mysqli_query($con,$query);
            if(!$result)
             {
               echo "error";
             }
             $result1=mysqli_query($con,$query1);
            if(!$result1)
             {
               echo "error";
             }
             $row1=mysqli_fetch_assoc($result1);
             
}
?>
<div class="container">
	<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Order id</th>
      <th scope="col">customer id</th>
      <th scope="col">Product id</th>
      <th scope="col">Order date</th>
      <th scope="col">delivery date</th>
      <th scope="col">Payment mode</th>
      <th scope="col">price</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$i=0;
  	while($row=mysqli_fetch_assoc($result))
  	{
    $i=$i+1;
  		?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['order_id']; ?></td>
      <td><?php echo $row['cust_id']; ?></td>
      <td><?php echo $row['prod_id']; ?></td>
      <td><?php echo $row['order_date']; ?></td>
      <td><?php echo $row['delivery_date']; ?></td>
      <td><?php echo $row['mode_of_payment']; ?></td>
      <td><?php echo $row['price']; ?></td>
    </tr>
    <?php
}
?>
<tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>Total</td>
      <td><?php echo $row1['sum']; ?></td>
    </tr>
  </tbody>
</table>
<div class="row">
<button type="submit" class="btn btn-dark mb-3  ml-4 col-3" onclick="location.href='mainpage.php'">Back</button>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
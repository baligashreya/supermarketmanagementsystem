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
	<form action="viewcust.php" method="post">
		<p class="h5">Filter by city</p>
				<div class="form-row">
                <div class="form-group col-12">
      			<input type="text" class="form-control" name="city" placeholder="Enter city">
  				</div>
  			</div>
  				<div class="form-row">
                <div class="form-group col-12">
                	<button type="submit" class="btn btn-dark mb-3  col-11" name="submitttt">Filter</button>
                	
    		</div>
			</div>
		</form>
</div>
<?php
require 'database1.php';
if(isset($_POST['submitttt']))
{
	$city=$_POST['city'];
	$query="select * from customer where city='$city'";
	$query1="select COUNT(*) as count from customer where city='$city'";
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
	$query="select * from customer";
	$query1="select COUNT(*) as count from customer";
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
      <th scope="col">customer id</th>
      <th scope="col">Customer name</th>
      <th scope="col">Email id</th>
      <th scope="col">Phone</th>
      <th scope="col">city</th>
      <th scope="col">state</th>
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
      <td><?php echo $row['cust_id']; ?></td>
      <td><?php echo $row['cust_name']; ?></td>
      <td><?php echo $row['email_id']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['city']; ?></td>
      <td><?php echo $row['state']; ?></td>
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
      <td>Total customer</td>
      <td><?php echo $row1['count']; ?></td>
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
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
	<?php
	error_reporting(0);
	session_start();
	?>
	
	<form action="delprod.php" method="post">
		<div style="margin-top: 100px;"> 
	<div class="container"   style=" background-color: rgba(0, 0, 255,.1);">
		<div class="row">
			<button type="button" class="btn btn-dark mb-3 mt-2 mx-5 col-11 " onclick="location.href='addprod.php';">Add products</button>
		</div>
			<div class="row mb-3 mt-2 mx-5">
				<form action="delprod.php" method="post">
				<div class="form-row">
                <div class="form-group col-12">
      			<input type="text" class="form-control" name="prod_id" placeholder="Enter product id">
  				</div>
  			</div>
  				<div class="form-row">
                <div class="form-group col-12">
                	<button type="submit" class="btn btn-dark mb-3 mx-5 col-11" name="submitt">Go</button>
                	<p class="h5">to update and delete product</p>
    		</div>
			</div>
		</form>
		</div>
		<?php
			
			$nf=$_SESSION['ff'];
			if(isset($nf)=='TRUE')
			{
			if($nf=="not found")
			{
				?>
				<script type="text/javascript">
					alert('product not found');
				</script>
				<?php
				
			}
		}
		unset($_SESSION['ff']);
			?>

	 	<div class="row">
			<button type="button" class="btn btn-dark mb-3 mx-5 col-11 " onclick="location.href='viewsale.php';">View sales</button>
		</div>
		<div class="row"> 
			<button type="button" class="btn btn-dark mb-3 mx-5 col-11" onclick="location.href='viewcust.php';">View Customer</button>
		</div>
		<div class="row">
			<button type="button" class="btn btn-dark mb-3 mx-5 col-11" onclick="location.href='logout.php';">Log out</button>
		</div>

	</div>
</div> 
<?php
      
      $y=$_SESSION['yes'];
      if($y=='yes')
      {
        ?>
        <script type="text/javascript">
          alert('inserted successfully');
        </script>
        <?php
        
    }
    unset($_SESSION['yes']);
      ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
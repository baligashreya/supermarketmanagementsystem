<?php
require 'check1.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <?php
        session_start();
        require 'database1.php';
        if(isset($_POST['prod_id']))
        {
        $_SESSION['pro']=$_POST['prod_id'];
      }
        $prod_id=$_SESSION['pro'];
        if(!$con)
        {
          echo "error";
        }
        
          
          
          $query="select prod_id from prod where prod_id='$prod_id'";
          $result=mysqli_query($con,$query);
          if(!$result)
          {
            echo "error1";
          }
          $row=mysqli_fetch_assoc($result);
          $prod=$row['prod_id'];
          if($prod==$prod_id)
          {
            $query1="select p.prod_id,p.prod_name,p.rating,p.path,p.price,p1.prod_spec,p1.manufacturer_details,p1.importer_details,p1.packers_details 
            from prod p,prod_details p1 
            where p.prod_id=p1.prod_id and p1.prod_id='$prod_id'";
            $result1=mysqli_query($con,$query1);
            if(!$result1)
             {
               echo "error";
             }
             $row1=mysqli_fetch_assoc($result1);

           }
         
      
           else
           {
            session_start();
            $_SESSION['ff']="not found";
             header("location:mainpage.php");
           }

             ?>
           
	<div style="margin-top: 100px;"> 
	<div class="container"   style=" background-color: rgba(0, 0, 255,.1);">
<form action="javascript:void(0);" method="post" id="myform" name="myform">
	<div class="row">
		<p class="h3 ml-3">Update or Delete products here</p>
	</div>
  <div class="row">
    <div class="form-group col-12">
      <label for="inputCity">Product id</label>
      <input type="text" class="form-control" id="inputCity" name="prod_id" value="<?php echo $row1['prod_id']; ?> ">
    </div>
</div>
    
  <div class="row">
    <div class="form-group col-12">
      <label for="inputCity">Product name</label>
      <input type="text" class="form-control" id="inputCity" name="prod_name" value="<?php echo $row1['prod_name']; ?> ">
    </div>
</div>
  <div class="row">
    <div class="form-group col-12">
      <label for="inputCity">product price</label>
      <input type="text" class="form-control" id="inputCity" name="price" value="<?php echo $row1['price']; ?> ">
    </div>
</div>
    <div class="row">
    <div class="form-group col-12">
      <label for="inputCity">path of product picture</label>
      <input type="text" class="form-control" id="inputCity" name="path" value="<?php echo $row1['path']; ?> ">
    </div>
</div>
<div class="row">
<div class="form-group col-12">
    <label for="inputAddress">specification</label>
    <input type="text" class="form-control" id="inputAddress"  name="prod_spec" value="<?php echo $row1['prod_spec']; ?> ">
  </div>
</div>
<div class="row">
<div class="form-group col-12">
    <label for="inputAddress">manufacturer</label>
    <input type="text" class="form-control" id="inputAddress"  name="m_d" value="<?php echo $row1['manufacturer_details']; ?> "> 
  </div>
</div>
<div class="row">
<div class="form-group col-12">
    <label for="inputAddress">importer</label> 
    <input type="text" class="form-control" id="inputAddress"  name="i_d" value="<?php echo $row1['importer_details']; ?> ">
  </div>
</div>
<div class="row">
<div class="form-group col-12">
    <label for="inputAddress">packer</label>
    <input type="text" class="form-control" id="inputAddress"  name="p_d" value="<?php echo $row1['packers_details']; ?> ">
  </div>
</div>
<div class="row">
    <div class="form-group col-3">
  <button type="submit" class="btn btn-primary bg-dark col-6 ml-5" name="update" onclick="javascript:completeAndRedirect();">Update</button>
</div>
    <div class="form-group col-3">
  <button type="submit" class="btn btn-primary bg-dark col-6 ml-5" name="delete" onclick="javascript:completeAndRedirect();">Delete</button>
  </div>
   <div class="form-group col-3">
  <button type="submit" class="btn btn-primary bg-dark col-6 ml-5" name="save" onclick="location.href='mainpage.php';">Back</button>
</div>

</div>
</form>
</div>
</div>
<script>
	function completeAndRedirect(){
		var r =confirm("Are your sure?");
		if(r==true){
		document.getElementById("myform").action="uprod.php";
		document.getElementById("myform").submit();
	}
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
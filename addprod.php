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
	<div style="margin-top: 100px;"> 
	<div class="container"   style=" background-color: rgba(0, 0, 255,.1);">
<form action="javascript:void(0);" method="post" id="myform" name="myform">
	<div class="row">
		<p class="h3 ml-3">Add products here</p>
	</div>
  <div class="row">
    <div class="form-group col-12">
      <label for="inputCity">Product id</label>
      <input type="text" class="form-control" id="inputCity" name="prod_id">
    </div>
</div>
    
  <div class="row">
    <div class="form-group col-12">
      <label for="inputCity">Product name</label>
      <input type="text" class="form-control" id="inputCity" name="prod_name">
    </div>
</div>
  <div class="row">
    <div class="form-group col-12">
      <label for="inputCity">product price</label>
      <input type="text" class="form-control" id="inputCity" name="price">
    </div>
</div>
    <div class="row">
    <div class="form-group col-12">
      <label for="inputCity">path of product picture</label>
      <input type="text" class="form-control" id="inputCity" name="path">
    </div>
</div>
<div class="row">
    <div class="form-group col-12">
      <label for="inputCity">path of category picture</label>
      <input type="text" class="form-control" id="inputCity" name="path1">
    </div>
</div>
<div class="row">
<div class="form-group col-12">
    <label for="inputAddress">specification</label>
    <input type="text" class="form-control" id="inputAddress"  name="spec">
  </div>
</div>
<div class="row">
<div class="form-group col-12">
    <label for="inputAddress">manufacturer</label>
    <input type="text" class="form-control" id="inputAddress"  name="man">
  </div>
</div>
<div class="row">
<div class="form-group col-12">
    <label for="inputAddress">importer</label> 
    <input type="text" class="form-control" id="inputAddress"  name="imp">
  </div>
</div>
<div class="row">
<div class="form-group col-12">
    <label for="inputAddress">packer</label>
    <input type="text" class="form-control" id="inputAddress"  name="packer">
  </div>
</div>
<div class="row">

<div class="form-group col-12">
  <label for="inputAddress ml-3">Select category</label>
          <select class="form-control form-control-sm" name="category">
            <option value="Cooking and Baking Supplies">Cooking & Baking Supplies</option>
            <option value="Cereal and Muesli">Cereal & Muesli</option>
            <option value="Canned and Jarred Food">Canned & Jarred Food</option>
            <option value="Sweets, Chocolate and Gum">Sweets, Chocolate & Gum</option>
            <option value="Coffee, Tea and Beverages">Coffee, Tea & Beverages</option>
            </select>
          </div>
        </div>
<div class="row">
    <div class="form-group col-md-6">
  <button type="submit" class="btn btn-primary bg-dark col-6 ml-5" name="save" onclick="javascript:completeAndRedirect();">Add</button>
</div>
</div>
</form>
</div>
</div>
<script>
	function completeAndRedirect(){
		var r =confirm("Are your sure?");
		if(r==true){
		document.getElementById("myform").action="insertprod.php";
		document.getElementById("myform").submit();
	}
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
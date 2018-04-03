<?php

include ("includes/db.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title> Insert Products</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>

<div class="row"><!-- row start-->
	
<div class="col-lg-12"><!-- col-lg-12 start-->
	
<ol class="breadcrumb"><!-- breadcrumb start-->
	
<li class="active">
	
<i class="fa fa-dashboard"></i>Dashboard / Insert Products
</li>
</ol><!-- breadcrumb end-->

</div><!-- col-lg-12 end-->

</div><!-- row end-->

<div class="row"><!-- 2 row start-->
	
<div class="col-lg-12"><!-- col-lg-12 start-->
	
<div class="panel panel-default"><!-- panel panel-default start-->
	
<div class="panel-heading"><!-- panel-heading start-->

<h3 class="panel-title">
	
	<i class="fa fa-money fa-fw"></i> Insert Products

</h3>		

</div><!-- panel-heading end-->

<div class="panel-body"><!-- panel-body start-->
	
<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal start-->
	
<div class="form-group"><!-- form-group start-->

<label class="col-md-3 control-label"> Product Title</label>	

<div class="col-md-6"><!-- col-md-6 start-->

<input type="text" name="product_title" class="form-control" required>	

</div><!-- col-md-6 end-->

</div><!-- form-group end-->

<div class="form-group"><!-- form-group start-->

<label class="col-md-3 control-label"> Product Category</label>	

<div class="col-md-6"><!-- col-md-6 start-->

<select name="product_cat" class="form-control">
	
	<option> Select a Product Category </option>

<?php

$get_p_cats = "select * from product_categories";

$run_p_cats = mysqli_query($conn,$get_p_cats);

while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
	
	$p_cat_id = $row_p_cats['p_cat_id'];

	$p_cat_title = $row_p_cats['p_cat_title'];

echo "<option value='$p_cat_id'>$p_cat_title</option>";
}

?>

</select>

</div><!-- col-md-6 end-->

</div><!-- form-group end-->

<div class="form-group"><!-- form-group start-->

<label class="col-md-3 control-label"> Category</label>	

<div class="col-md-6"><!-- col-md-6 start-->

<select name="cat" class="form-control">
	
<option> Select a Category</option>

<?php

$get_cat = "select * from categories";

$run_cat = mysqli_query($conn,$get_cat);

while ($row_cat=mysqli_fetch_array($run_cat)) {
	
	$cat_id = $row_cat['cat_id'];

	$cat_title = $row_cat['cat_title'];

echo "<option value='$cat_id'>$cat_title</option>";
}

?>

</select>

</div><!-- col-md-6 end-->

</div><!-- form-group end-->

<div class="form-group"><!-- form-group start-->

<label class="col-md-3 control-label"> Product Image 1</label>	

<div class="col-md-6"><!-- col-md-6 start-->

<input type="file" name="product_img1" class="form-control" required>	

</div><!-- col-md-6 end-->

</div><!-- form-group end-->

<div class="form-group"><!-- form-group start-->

<label class="col-md-3 control-label"> Product Image 2</label>	

<div class="col-md-6"><!-- col-md-6 start-->

<input type="file" name="product_img2" class="form-control" required>	

</div><!-- col-md-6 end-->

</div><!-- form-group end-->

<div class="form-group"><!-- form-group start-->

<label class="col-md-3 control-label"> Product Image 3</label>	

<div class="col-md-6"><!-- col-md-6 start-->

<input type="file" name="product_img3" class="form-control" required>	

</div><!-- col-md-6 end-->

</div><!-- form-group end-->

<div class="form-group"><!-- form-group start-->

<label class="col-md-3 control-label"> Product Price</label>	

<div class="col-md-6"><!-- col-md-6 start-->

<input type="text" name="product_price" class="form-control" required>	

</div><!-- col-md-6 end-->

</div><!-- form-group end-->

<div class="form-group"><!-- form-group start-->

<label class="col-md-3 control-label"> Product Keywords</label>	

<div class="col-md-6"><!-- col-md-6 start-->

<input type="text" name="product_keywords" class="form-control" required>	

</div><!-- col-md-6 end-->

</div><!-- form-group end-->

<div class="form-group"><!-- form-group start-->

<label class="col-md-3 control-label"> Product Description</label>	

<div class="col-md-6"><!-- col-md-6 start-->

<textarea name="product_desc" class="form-control" rows="6" cols="19"></textarea>


</div><!-- col-md-6 end-->

</div><!-- form-group end-->

<div class="form-group"><!-- form-group start-->

<label class="col-md-3 control-label"></label>	

<div class="col-md-6"><!-- col-md-6 start-->

<input type="submit" name="submit" value="Insert Product" class="btn btn-primary class-form-contol">	

</div><!-- col-md-6 end-->

</div><!-- form-group end-->


</form><!-- form-horizontal end-->

</div><!-- panel-body end-->

</div><!-- panel panel-default end-->

</div><!-- col-lg-12 end-->

</div><!-- 2 row end-->

<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php

if(isset($_POST['submit'])){

$product_title = $_POST['product_title'];
$product_cat = $_POST['product_cat'];
$cat = $_POST['cat'];
$product_price = $_POST['product_price'];
$product_desc = $_POST['product_desc'];
$product_keywords = $_POST['product_keywords'];

$product_img1 = $_FILES['product_img1']['name'];
$product_img2 = $_FILES['product_img2']['name'];
$product_img3 = $_FILES['product_img3']['name'];

$temp_name1 = $_FILES['product_img1']['temp_name'];
$temp_name2 = $_FILES['product_img2']['temp_name'];
$temp_name3 = $_FILES['product_img3']['temp_name'];

move_uploaded_file($temp_name1, "product_images/$product_img1");
move_uploaded_file($temp_name2, "product_images/$product_img2");
move_uploaded_file($temp_name3, "product_images/$product_img3");

$insert_product = "insert into products (p_cat_id,cat_id,date, product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keywords) values ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','product_desc','product_keywords')";

$run_product = mysqli_query($conn,$insert_product);

if($run_product){

	echo "<script>alert('Product has been inserted successfully')</script>";

	echo "<script>window.open('insert_product.php','self')</script>";
}
}

?>
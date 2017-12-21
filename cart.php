
<!DOCTYPE html>

<html>

<head>

<title>E commerce Store </title>

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet" type="text/css">
<link href="styles/cart.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/footer.css">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>


<div id="top"><!-- top Starts -->

<div class="container"><!-- container Starts -->

<div class="col-md-6 offer"><!-- col-md-6 offer Starts -->

<a href="#" class="btn btn-success btn-sm" >

Welcome :Guest</a>

<a href="#">
Shopping Cart Total Price: $0, Total Items </a>

</div><!-- col-md-6 offer Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->
<ul class="menu"><!-- menu Starts -->

<li>
<a href="customer_register.php">
Register
</a>
</li>

<li>
<a href='checkout.php' >My Account</a></li>

<li>
<a href="cart.php">
Go to Cart
</a>
</li>

<li>
<a href='checkout.php'> Login </a></li>

</ul><!-- menu Ends -->

</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->
</div><!-- top Ends -->

<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->
<div class="container" ><!-- container Starts -->

<div class="navbar-header"><!-- navbar-header Starts -->

<a class="navbar-brand home" href="index.php" ><!--- navbar navbar-brand home Starts -->

<img src="images/logo.png" alt="computerfever logo" class="hidden-xs" >
<img src="images/logo-small.png" alt="computerfever logo" class="visible-xs" >

</a><!--- navbar navbar-brand home Ends -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >

<span class="sr-only" >Toggle Navigation </span>

<i class="fa fa-align-justify"></i>

</button>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >

<span class="sr-only" >Toggle Search</span>

<i class="fa fa-search" ></i>

</button>


</div><!-- navbar-header Ends -->

<div class="navbar-collapse collapse" id="navigation" ><!-- navbar-collapse collapse Starts -->

<div class="padding-nav" ><!-- padding-nav Starts -->

<ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->

<li>
<a href="index.php"> Home </a>
</li>

<li>
<a href="shop.php"> Shop </a>
</li>

<li>
<a href='checkout.php' >My Account</a></li>

<li class="active" >
<a href="cart.php"> Shopping Cart </a>
</li>

<li>
<a href="about.php"> About Us </a>
</li>

<li>

<a href="services.php"> Services </a>

</li>

<li>
<a href="contact.php"> Contact Us </a>
</li>

</ul><!-- nav navbar-nav navbar-left Ends -->

</div><!-- padding-nav Ends -->

<a class="btn btn-primary navbar-btn right" href="cart.php"><!-- btn btn-primary navbar-btn right Starts -->

<i class="fa fa-shopping-cart"></i>

<span>  items in cart </span>

</a><!-- btn btn-primary navbar-btn right Ends -->

<div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->

<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

<span class="sr-only">Toggle Search</span>

<i class="fa fa-search"></i>

</button>

</div><!-- navbar-collapse collapse right Ends -->

<div class="collapse clearfix" id="search"><!-- collapse clearfix Starts -->

<form class="navbar-form" method="get" action="results.php"><!-- navbar-form Starts -->

<div class="input-group"><!-- input-group Starts -->

<input class="form-control" type="text" placeholder="Search" name="user_query" required>

<span class="input-group-btn"><!-- input-group-btn Starts -->

<button type="submit" value="Search" name="search" class="btn btn-primary">

<i class="fa fa-search"></i>

</button>

</span><!-- input-group-btn Ends -->

</div><!-- input-group Ends -->

</form><!-- navbar-form Ends -->

</div><!-- collapse clearfix Ends -->

</div><!-- navbar-collapse collapse Ends -->

</div><!-- container Ends -->
</div><!-- navbar navbar-default Ends -->



<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->

<div class="col-md-12" ><!--- col-md-12 Starts -->

<ul class="breadcrumb" style="background-color: white; "><!-- breadcrumb Starts -->

<li>
<a href="index.php">Home</a>
</li>

<li>Cart</li>

</ul><!-- breadcrumb Ends -->

</div><!--- col-md-12 Ends -->

<div class="col-md-9" id="cart"><!-- col-md-9 start-->
	
<div class="box"><!-- box start-->
	
<form action="cart.php" method="post" enctype="multipuat-form-data"><!-- form start-->
	
<h1> Shopping Cart</h1>

<p class="text-muted">You currently have 3 item(s) in your cart </p>

<div class="table-responsive"><!-- table-responsive start-->
	
<table class="table"><!-- table start-->
	
<thead><!-- thread start-->
	
<tr>
	
<th colspan="2">Product</th>

<th>Quantity</th>

<th>Unit Price</th>

<th>Size</th>

<th colspan="1">Delete</th>

<th colspan="2">Sub Total</th>

</tr>

</thead><!-- thread end-->

<tbody><!-- tbody start-->
	
<tr><!-- tr start-->
	
	<td>
		
		<img src="admin_area/product_images/product.jpg">

	</td>

	<td>
		
		<a href="#">Marvel Bla</a>

	</td>

	<td>2</td>

	<td>$50.00</td>

	<td>Large</td>

	<td>
		<input type="checkbox" name="remove[]">
	</td>

	<td>$100.00</td>

</tr><!-- tr end-->

<tr><!-- tr start-->
	
	<td>
		
		<img src="admin_area/product_images/product.jpg">

	</td>

	<td>
		
		<a href="#">Marvel Bla</a>

	</td>

	<td>2</td>

	<td>$50.00</td>

	<td>Large</td>

	<td>
		<input type="checkbox" name="remove[]">
	</td>

	<td>$100.00</td>

</tr><!-- tr end-->

<tr><!-- tr start-->
	
	<td>
		
		<img src="admin_area/product_images/product.jpg">

	</td>

	<td>
		
		<a href="#">Marvel Bla</a>

	</td>

	<td>2</td>

	<td>$50.00</td>

	<td>Large</td>

	<td>
		<input type="checkbox" name="remove[]">
	</td>

	<td>$100.00</td>

</tr><!-- tr end-->

</tbody><!-- tbody end-->

<tfoot><!-- tfoot start-->
	
<tr>
	
<th colspan="5">Total</th>

<th colspan="2">$100.00</th>

</tr>

</tfoot><!-- tfoot end-->


</table><!-- table end-->

</div><!-- table-responsive end-->

<div class="box-footer"><!--box-footer start-->
	
<div class="pull-left"><!--pull-left start-->
	
	<a href="index.php" class="btn btn-default">
		
	<i class="fa fa-chevron-left"></i>Continue Shopping

	</a>

</div><!--pull-left end-->

<div class="pull-right"><!--pull-right start-->
	
<button class="btn btn-default" type="submit" name="update" value="Update Cart">
<i class="fa fa-refresh"></i>Update Cart	
</button>

<a href="checkout.php" class="btn btn-primary">Proceed to Checkout <i class="fa fa-chevron-right"></i>
</a>

</div><!--pull-right end-->

</div><!-- box-footer end-->

</form>	<!-- form end-->

</div><!-- box end-->

<div id="row same-height-row"><!-- row same-height-row start-->
	
<div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 start-->

<div class="box same-height headline"><!-- box same-height headline start-->
	
<h3 class="text-center">You also like these Products</h3>

</div><!-- box same-height headline end-->

</div><!-- col-md-3 col-sm-6 end-->

<div class="center-responsive col-md-3 col-sm-6"><!-- center-responsive col-md-3 col-sm-6 start-->

<div class="product same-height"><!--product same-height start-->
	
<a href="details.php">
<img src="admin_area/product_images/product.jpg" class="img-responsive">
</a>

<div class="text"><!-- text start-->

<h3> <a href="details.php">Marvel Bla </a></h3>	

<p class="price">$50</p>

</div><!-- text end-->

</div><!--product same-height end-->

</div><!-- center-responsive col-md-3 col-sm-6 end-->


<div class="center-responsive col-md-3 col-sm-6"><!-- center-responsive col-md-3 col-sm-6 start-->

<div class="product same-height"><!--product same-height start-->
	
<a href="details.php">
<img src="admin_area/product_images/product.jpg" class="img-responsive">
</a>

<div class="text"><!-- text start-->

<h3> <a href="details.php">Marvel Bla </a></h3>	

<p class="price">$50</p>

</div><!-- text end-->

</div><!--product same-height end-->

</div><!-- center-responsive col-md-3 col-sm-6 end-->


<div class="center-responsive col-md-3 col-sm-6"><!-- center-responsive col-md-3 col-sm-6 start-->

<div class="product same-height"><!--product same-height start-->
	
<a href="details.php">
<img src="admin_area/product_images/product.jpg" class="img-responsive">
</a>

<div class="text"><!-- text start-->

<h3> <a href="details.php">Marvel Bla </a></h3>	

<p class="price">$50</p>

</div><!-- text end-->

</div><!--product same-height end-->

</div><!-- center-responsive col-md-3 col-sm-6 end-->

</div><!-- row same-height-row end-->

</div><!-- col-md-9 end-->

<div class="col-md-3"><!-- col-md-3 Starts -->

<div class="box" id="order-summary"><!-- box Starts -->

<div class="box-header"><!-- box-header Starts -->

<h3>Order Summary</h3>

</div><!-- box-header Ends -->

<p class="text-muted">
Shipping and additional costs are calculated based on the values you have entered.
</p>

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table"><!-- table Starts -->

<tbody><!-- tbody Starts -->

<tr>

<td> Order Subtotal </td>

<th> $0.00 </th>

</tr>

<tr>

<td> Shipping and handling </td>

<th>$0.00</th>

</tr>

<tr>

<td>Tax</td>

<th>$0.00</th>

</tr>

<tr class="total">

<td>Total</td>

<th>$0.00</th>

</tr>

</tbody><!-- tbody Ends -->

</table><!-- table Ends -->

</div><!-- table-responsive Ends -->

</div><!-- box Ends -->

</div><!-- col-md-3 Ends -->

</div><!-- container Ends -->
</div><!-- content Ends -->

<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
</body>


</html>

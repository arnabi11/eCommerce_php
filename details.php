<html>

<head>
<title>E commerce Store </title>

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

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

<li class="active">
<a href="shop.php"> Shop </a>
</li>

<li>
<a href='checkout.php' >My Account</a></li>

<li>
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

<li>Shop</li>

</ul><!-- breadcrumb Ends -->



</div><!--- col-md-12 Ends -->
<div class="col-md-3"><!-- col-md-3 start-->

<?php include("includes/sidebar.php"); ?>

</div><!-- col-md-3 end-->

<div class="col-md-9"><!-- col-md-9 start-->

<div class="row" id="productMain"><!-- row start-->
<div class="col-sm-6"><!-- col-sm-6 start-->

<div id="mainImage"><!-- mainImage start-->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators"><!-- carousel-indicators start-->	
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>

</ol><!-- carousel-indicators end-->	

<div class="carousel-inner">

<div class="item active">
<center>
<img src="admin_area/product_images/product.jpg" class="img-responsive">	
</center>	
</div>

<div class="item">
<center>
<img src="admin_area/product_images/product2.jpg" class="img-responsive">	
</center>
</div>

<div class="item">
<center>
<img src="admin_area/product_images/product3.jpg" class="img-responsive">	
</center>
</div>

</div>

<a href="#myCarousel" class="left carousel-control" data-slide="prev">

<span class="glyphicon glyphicon-chevron-left"></span>

<span class="sr-only">Previous</span>

</a>

<a class="right carousel-control" href="#myCarousel" data-slide="next">

<span class="glyphicon glyphicon-chevron-right"></span>

<span class="sr-only">Next</span>

</a>

</div>

</div><!-- mainImage end-->

</div><!-- col-sm-6 end-->

<div class="col-sm-6"><!-- col-sm-6 start-->

<div class="box"><!-- box start-->

<h1 class="text-center">Marvel Bla</h1>

<form action="details.php" method="post" class="form-horizontal">

<div class="form-group">
	
<label class="col-md-5 control-lable">Product Quantity</label>

<div class="col-md-7">
	
<select name="product_qty" class="form-control">
	<option>1</option>
	<option>2</option>
	<option>3</option>
	<option>4</option>
	<option>5</option>

</select>

</div>

</div>

<div class="form-group">
	
<label class="col-md-5 control-lable">Product Size</label>

<div class="col-md-7">
	
<select name="product_size" class="form-control">
<option>select a Size</option>
<option>Small</option>
<option>Medium</option>
<option>Large</option>	

</select>

</div>

</div>
<center>


</center>

<p class="price">Product Price : $50
</p>

<p class="text-center buttons" >

<button class="btn btn-primary" type="submit" name="add_cart">

<i class="fa fa-shopping-cart" ></i> Add to Cart

</button>

<button class="btn btn-primary" type="submit" name="add_wishlist">

<i class="fa fa-heart" ></i> Add to Wishlist

</button>



</p>
</form>






</div><!-- box end-->

<div class="row" id="thumbs"><!-- row start-->
	
<div class="col-xs-4"><!-- col-xs-4 start-->
	
<a href="#" class="thumb">
	
<img src="admin_area/product_images/product.jpg" class="img-responsive">

</a>

</div><!-- col-xs-4 end-->


<div class="col-xs-4"><!-- col-xs-4 start-->
	
<a href="#" class="thumb">
	
<img src="admin_area/product_images/product-2.jpg" class="img-responsive">

</a>

</div><!-- col-xs-4 end-->


<div class="col-xs-4"><!-- col-xs-4 start-->
	
<a href="#" class="thumb">
	
<img src="admin_area/product_images/product-3.jpg" class="img-responsive">

</a>

</div><!-- col-xs-4 end-->

</div><!-- row end-->

</div><!-- col-sm-6 end-->

</div><!-- row end-->

<div class="box" id="details"><!-- box start-->

<p><!-- p start-->
	
<h4>Product details</h4>

<p>
	Integer tristique dictum sapien et lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed imperdiet magna, at rhoncus arcu. Cras tincidunt felis eu vehicula consequat. Proin vel gravida quam. In tincidunt aliquam nisl. Sed velit erat, aliquam sit amet metus eget, molestie auctor nulla.Integer tristique dictum sapien et lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed sed imperdiet magna, at rhoncus arcu. Cras tincidunt felis eu vehicula consequat. Proin vel gravida quam. In tincidunt aliquam nisl. Sed velit erat, aliquam sit amet metus eget, molestie auctor nulla.
</p>

<h4>Size</h4>

<ul>
	
<li>Small</li>
<li>Medium</li>
<li>Large</li>

</ul>

</p><!-- p end-->

<hr>

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

</div><!--container end-->
</div><!--content end-->


 <?php

include("includes/footer.php");

?>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
</body>


</html>

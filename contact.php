<!DOCTYPE html>

<html>

<head>
<title>E commerce Store </title>

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles/footer.css">

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

<li>
<a href="cart.php"> Shopping Cart </a>
</li>

<li>
<a href="about.php"> About Us </a>
</li>

<li>

<a href="services.php"> Services </a>

</li>

<li class="active">
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

<li>Contact Us</li>

</ul><!-- breadcrumb Ends -->



</div><!--- col-md-12 Ends -->
<div class="col-md-3"><!-- col-md-3 start-->

<?php include("includes/sidebar.php"); ?>

</div><!-- col-md-3 end-->

<div class="col-md-9"><!-- col-md-9 start-->
	
<div class="box"><!-- box start-->
	
<div class="box-header"><!-- box-header start-->
	
<center><!-- center start-->
	
<h2>Contact Us</h2>

<p class="text-muted">
	If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.
</p>	

</center><!-- center end-->
		
</div><!-- box-header end-->

<form action="contact.php" method="post"><!-- form start-->
	
<div class="form-group"><!-- form-group start-->
	
<label>Name</label>

<input type="text" class="form-control" name="name" required>
</div><!-- form-group end-->

<div class="form-group"><!-- form-group start-->
	
<label>Email</label>
<input type="text" class="form-control" name="email" required>	
</div><!-- form-group end-->

<div class="form-group"><!-- form-group start-->
	
<label>Subject</label>
<input type="text" class="form-control" name="subject" required>	
</div><!-- form-group end-->

<div class="form-group"><!-- form-group start-->
	
<label>Message</label>

<textarea class="form-control" name="message"></textarea>
	
</div><!-- form-group end-->

<div class="text-center"><!-- text-center start-->
	
<button type="submit" name="submit" class="btn btn-primary">
	
	<i class="fa fa-user-md"></i>Send Message
	
</button>

</div><!-- text-center end-->

</form><!-- form end-->
	
</div><!-- box end-->
	
</div><!-- col-md-9 end-->
	
</div><!-- container Ends -->

</div><!-- content Ends -->

<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
</body>


</html>

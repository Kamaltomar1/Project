<!doctype>
<?php
session_start();
include("functions/functions.php");
?>

<html>
<head>
   <title>My Online Shop</title>
   
   <link rel="stylesheet" href="styles/style.css"   media="all" />
   
</head>
<body>

<!-- Main wrapper starts from here-->
<div class="main_wrapper">
          <!-- Header starts from here-->
      <div class="header_wrapper">
	  
	  <a href="../index.php"><img  id="logo" src="images/logo.png" /></a>
	  <img  id="banner" src="images/ad_banner.jpg" />
	  </div>
	    <!-- Header ends here-->
	  
	   
	   
	   <!-- Navigation starts from here-->
	   <div class="menubar">
	      <ul id="menu"> 
		  <li><a href="index.php">Home</a></li>
		  <li><a href="all_products.php">All Product</a></li>
		  <li><a href="customer/my_account.php">My Account</a></li>
		  <li><a href="#">Sign Up</a></li>
		  <li><a href="cart.php">Shopping Cart</a></li>
	      <li><a href="#">Contact Us</a></li>
		  </ul>
		  <div id="form">
		    <form method="get" action="results.php" enctype="multipart/form-data" />
			  <input type="text" name="user_query" placeholder="Search a product" />
			  <input type="submit" name="search" value="search" />
			</form>
		  </div>
	   </div>
	   <!-- Navigation ends  here-->
		
	   <!-- Content wrapper starts from  here-->
	   <div class="content_wrapper">
       <div id="sidebar">
	    <div id="sidebar_title">My Account</div>
		   <ul id="cats">
		   
		   <?php
		     $user =$_SESSION['customer_email'];
			 $get_img ="select * from customers where customer_email ='$user'";
			 $run_img = mysqli_query($conn, $get_img);
			 $row_img = mysqli_fetch_array($run_img);
			 $c_image = $row_img['customer_image'];
			 $c_name = $row_img['customer_name'];
			 echo"<p style='text-align:center;'><img src='customer_images/$c_image' width='150' height='150'/></p>";
			 ?>
		   
		   ?>
		   <li><a href="my_account.php?my_orders">My orders</a></li>
		   <li><a href="my_account.php?edit_account">Edit Account</a></li>
		   <li><a href="my_account.php?change_pass">Change password</a></li>
		   <li><a href="my_account.php?delete_account">Delete Account</a></li>
		   <li><a href="logout.php">Logout</a></li>
			
		   </ul>
		   
		   </div>
       <div id="content_area">
	     <?php cart(); ?>
	      <div id="shopping_cart">
		     <span style="float:right; font-size:15px; padding:5px; line-height:40px;" >
			 
			 <?php
			      if(isset($_SESSION['customer_email'])){
				    echo "<b>Welcome:</b>" .$_SESSION['customer_email'] ;
					}
					
					
			 
			 ?>
			 
			 
			 <?php
			     if(!isset($_SESSION['customer_email'])){
					 echo "<a href ='checkout.php' style='color:orange;'>Login</a>";
				 }
				 else{
					 echo "<a href='logout.php' style='color:orange'>Logout</a>";
				 }
				 
			 
			 
			 ?>
			 </span>
		  
		  </div>
		  
	   
	   
	   
	   
	   
	   
	      <div id ="products_box">
		  
		    <h2 style="padding:20px;">Welcome: <?php echo $c_name;  ?></h2></br>
			
			<?php  
			 if(!isset($_GET['my_orders'])){
				 if(!isset($_GET['edit_account'])){
					 if(!isset($_GET['change_pass'])){
						 if(!isset($_GET['delete_account'])){
			
			echo "<h2 style='padding:20px;'>Welcome: $c_name</h2></br>
			<b>You can see your orders progress by clicking this <a href='my_account.php?my_orders'>link</a></b>";
						 }
					 }
				 }
			 }
	        ?>
			
			<?php
			 if(isset($_GET['edit_account'])){
				 include("edit_account.php");
			
			 }
			 if(isset($_GET['change_pass'])){
				 include("change_pass.php");
			
			 }
			  if(isset($_GET['delete_account'])){
				 include("delete_account.php");
			
			 }
			
			?>
	   </div>
       </div>	
	   <!-- Content wrapper  ends here-->
		
		<!-- This is footer-->
        <div id="footer">
		
		<h2 style="text-align:center; padding-top:30px;">&copy; 2014 by www.onlineTuting.com</h2>
		</div>	   
	
	   




</div>

<!-- Main wrapper starts ends here-->



</body>
</html>
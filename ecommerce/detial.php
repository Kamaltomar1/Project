<!doctype>
<?php
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
	  <img  id="logo" src="images/logo.png" />
	  <img  id="banner" src="images/ad_banner.jpg" />
	  </div>
	    <!-- Header ends here-->
	  
	   
	   
	   <!-- Navigation starts from here-->
	   <div class="menubar">
	      <ul id="menu"> 
		  <li><a href="#">Home</a></li>
		  <li><a href="#">All Product</a></li>
		  <li><a href="#">My Account</a></li>
		  <li><a href="#">Sign Up</a></li>
		  <li><a href="#">Shopping Cart</a></li>
	      <li><a href="#">Contact Us</a></li>
		  </ul>
		  <div id="form">
		    <form method="get" action="result.php" enctype="multipart/form-data" />
			  <input type="text" name="user_query" placeholder="Search a product" />
			  <input type="submit" name="search" value="search" />
			</form>
		  </div>
	   </div>
	   <!-- Navigation ends  here-->
		
	   <!-- Content wrapper starts from  here-->
	   <div class="content_wrapper">
       <div id="sidebar">
	    <div id="sidebar_title">Categories</div>
		   <ul id="cats">
		   
		    <?php getCats();  ?>
			
		   </ul>
		   
		   <div id="sidebar_title">Brands</div>
		   <ul id="cats">
		   
		   <?php getBrands();    ?>
		   
		   </ul>
	   </div>
       <div id="content_area">
	      <div id="shopping_cart">
		     <span style="float:right; font-size:18px; padding:5px; line-height:40px;" >
			 
			 Welcome Guest! <b style="color:yellow">Shopping Cart -</b> Total Items: Total Price: <a href="cart.php" style="color:yellow">Go to Cart</a>
			 
			 </span>
		  
		  </div>
	   
	   
	   
	   
	   
	   
	      <div id ="products_box">
		
	   
	   
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
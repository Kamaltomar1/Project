<!doctype>
<html>
    <head>
	   <title>Login Form</title>
	 <link rel="stylesheet" href="styles/login_style.css" media="all"  />
	</head>
<body>

<div class="login">
<h2 style="color:white; text-align:center;"><?php echo @$_GET['not_admin'];  ?></h2>
	<h1>Admin Login</h1>
    <form method="post" action="login.php">
    	<input type="text" name="email" placeholder="Email" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Login</button>
    </form>
</div>

</body>
</html>

<?php
session_start();
include("includes/conn.php");
  if(isset($_POST['login'])){
	  $email =mysql_real_escape_string($_POST['email']);
	  $pass =mysql_real_escape_string($_POST['password']);
	  $sel_user ="select * from admins where user_email='$email' AND user_pass='$pass'";
	  $run_user = mysqli_query($conn ,$sel_user);
	  $check_user =mysqli_num_rows($run_user);
	  if($check_user==0){
		  echo"<script>alert('password or Email is wrong, try again!')</script>";
	  }
		   else{
          $_SESSION['user_email']=$email;
          echo"<script>window.open('index.php?logged_in=you have successfully Logged in!','_self')</script>";		  
	  }
  }
	  

?>
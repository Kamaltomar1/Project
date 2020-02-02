<br>
<h2 style="text-align:center; ">Do you really want to delete your account?</h2>
<form>
<br>
<input type="submit" name="yes" value="Yes I Want" />
<input type="submit" name="no" value="No I was Joking" />



</form>

<?php  
include("includes/conn.php");
    $user = $_SESSION['customer_email'];
	if(isset($_POST['yes'])){
		$delete_customer="delete from customers where customer_email='$user'";
		$run_customer = mysqli_query($conn,$delete_customer);
		echo "<script>alert('we are really sorry. your account has been deleted!')</script>";
		echo "<script><window.open('../index.php','_self')</script>";
	}
	 if(isset($_POST['no'])){
		 echo "<script>alert('oh! do not joke again!')</script>";
		 echo "<script>window.open('my account.php','_self')</script>";
	 }	
		
		
		
	?>	
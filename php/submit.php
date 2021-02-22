<?php 
include 'connect.php';

if(isset($_POST['submit'])){		
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$feedback = "";
		
	echo("<script>alert('Submission successfully')</script>");

	$insert_customer = "INSERT INTO registration (`name`,`phone`,`email`,`feedback`) VALUES('$name','$phone','$email','$feedback')"; 
		echo "outside";
		$run_customer = mysqli_query($conn,$insert_customer);
		echo "outside";  	
		if($run_customer){
		if(mysqli_affected_rows($conn)>0){
								
				echo("<script>alert('Registration is done successfully ,,')</script>");
				echo("<script>window.open('index.html','_self')</script>");

		}else{
	
			echo"<scripit>alert('Something Went Wrong...')</script>";  
    }
 }
}
?>
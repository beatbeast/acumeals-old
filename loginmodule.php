<!Doctype html>
<html>
<head><title>LoginModule to create a session</title>
</head>
<body>
<?php
//create a connection with session database in MYSQLi

$conn=mysqli_connect("localhost","root","","acumeals");
if(!$conn)
{
	die("error in establishing the connection :". mysqli_connect_error());
}
//check the user
if(isset($_POST['login']))
{
	//removing special charachter from email and password field of Login form in order to free from sql injection 
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	
	$sql="select * from users where email='".$email."' AND password='".$password."'";
	
	$run_query=mysqli_query($conn,$sql);
	//check user
	if((mysqli_num_rows($run_query))>0)
	{
		//create a session
        session_start();
		//store the email in SESSION global variable
		$_SESSION['email']=$email;
		
		$session=$_SESSION['email'];
		
		//redirect to HOME page
		header("Location:index.php");
	}
	else
	   echo "wrong email or password";
	
}

?>
<!--php code ends-->
</body>
</html>
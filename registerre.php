<!Doctype html>
<html>
<head><title>Registration Table</title>
<head>
<body>
<!--php code begins-->
<?php

//Determine if the value is set and Not null using isset() i.e user has submitted the form or not
if(isset($_POST['submit'])){

//get values of the Registration form submited by user

$name=$_POST['name'];
$username=$_POST['username'];
// $profile_picture=$_POST['profile_picture']; '".$profile_picture."',  profile_picture,
$password=$_POST['password_confirm'];
$email=$_POST['email'];

//create a connection with database acumeals using mysqli_connect()
$conn = mysqli_connect("localhost","root","","acumeals");
//check the connection
if (mysqli_connect_errno())
{
echo 'MySQLi Connection was not established: ' . mysqli_connect_error();
}

//insert records in users table in acumeals database
$sql="insert into users(name,username,password_confirm,email,status,last_login) 
 VALUES('".$name."','".$username."','".$password."','".$email."','0','now()')";

//run the above query using mysqli_query()
$result=mysqli_query($conn,$sql);

if($result)
{ 
 echo 'Record has been inserted succesfully';
		
 //redirect to Log-In page
 header('Location:log-in.php');
}
else
{ 
echo 'Record has not been inserted succesfully';

        //redirect to Sign-up page
        header('Location:sign-up.php'); 
}

//close the connection
mysqli_close($conn);
}

else
{
echo 'Please Submit the form first.'; 
}

?>
<!--php code ends-->
</body>
</html>
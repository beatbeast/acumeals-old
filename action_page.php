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

$email=$_POST['email'];
$psw=$_POST['pwd'];


//create a connection with database foodordering using mysqli_connect()
$conn = mysqli_connect("localhost","root","root","foodordering");
//check the connection
if (mysqli_connect_errno())
{
echo 'MySQLi Connection was not established: ' . mysqli_connect_error();
}

//insert records in customer table in foodordering database
$sql="insert into customers(email,pwd,status,last_login)
 VALUES(,'".$email."','".$psw."','0',now())";

//run the above query using mysqli_query()
$result=mysqli_query($conn,$sql);

if($result)
{
 echo 'Record has been inserted succesfully';
 //redirect to Log-in page
		header('Location:clogin.html');
}
else
{
  echo 'Record has not been inserted succesfully';
  //redirect to Registration page
		header('Location:Creg.html');
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

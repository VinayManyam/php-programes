<html>
<title> Registration from</title>
<body>
<center>
<h1>Registration Form</h1>
<form method="post" action="#">
Name:<input type="text" name="name" pattern="[a-zA-Z]{5,8}" ><br><br>
Email:<input type="email" name="email" ><br><br>
Phone:<input type="text" name="phone"   ><br><br>
Password:<input type="password" name="password">
<input type="submit" name="submit" value="submit">
</form>
</center>
</body>
</html>
<?php 
extract($_POST);
if(isset($submit))
{
	include "dbconnect.php";
	$qer="insert into login (name,email,phone,password) values ('$name','$email','$phone','$password')";
$res=mysqli_query($con,$qer);
if($res)
{
	echo "inserted successfully";
	
}
else{
	echo "inserting failed";
}
	}


?>
<html>
<title> update from</title>
<body>
<center>
<h1>update Form</h1>
<form method="post" action="#">
Name:<input type="text" name="name"><br><br>
Email:<input type="email" name="email"><br><br>
Phone:<input type="text" name="phone"><br><br>
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
	$qer="update login set email='$email',phone='$phone',password='$password' where name='$name'";
$res=mysqli_query($con,$qer);
if($res)
{
	echo "updated  successfully";
	
}
else{
	echo "update failed";
}
	}


?>
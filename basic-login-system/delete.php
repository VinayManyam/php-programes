<html>
<title> delete from</title>
<body>
<center>
<h1>update Form</h1>
<form method="post" action="#">
Name:<input type="text" name="name"><br><br>
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
	$qer="delete from login where name='$name'";
$res=mysqli_query($con,$qer);
if($res)
{
	echo "u r account deleted successfully";
	
}
else{
	echo "delete failed";
}
	}


?>
<html>
<title> Registration from</title>
<body>
<center>
<h1>Registration Form</h1>
<form method="post" action="#">
Name:<input type="text" name="name" onkeypress="return validateAlpha(event);"  required><br><br>
Email:<input type="email" name="email"  required><br><br>
Phone:<input type="text" name="phone" required><br><br>
Password:<input type="password" name="password" required >
<input type="submit" name="submit" value="submit">
</form>
</center>
<script> 
function validateAlpha(evt)
{
var keyCode =(evt.which)?evt.which:evt.keyCode 
if((keyCode<65|| keyCode>90)&& ( keyCode<97||keyCode>123)&&keyCode!=32)
	return false;
return true;

}
</script>
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
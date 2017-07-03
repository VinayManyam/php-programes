<html>
<title> Registration from</title>
<body>
<center>
<h1>login Form</h1>
<form method="POST" action="">
Name:<input type="text" name="name"><br><br>
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
$qer="select * from login where name='$name' ";	
$qes=mysqli_query($con,$qer);
while($row=mysqli_fetch_array($qes))
{
$pass=$row['password']; ,

}
if($pass==$password)
{
	header('location:display.php');
}
else
{
	echo "password is incorrect";
}
}
?>
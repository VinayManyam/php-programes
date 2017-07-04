<?php 
   include "../includes/ses.php";
if(empty($_SESSION['id']))
{
   header('location:index.php');
}

     ?>
<html>
<title>Home</title>
<body>
    <div align="right">
<font size="5" color="green">Hi <?php echo $_SESSION['name'];?></font><br>
<br>
<a href="dashboard.php" style="text-decoration: none">dashboard</a><br>
<a href="../logout.php" style="text-decoration: none">logout</a>
</div>
    <fieldset>
        <legend>Register New product </legend>
    <div align="center">
    <form method="post" action="">
        Name:<input type="text" name="name" placeholder="name" required><br><br>
Price:<input type="text" name="price" placeholder="price"  required><br><br>
Status:<input type="text" name="status" value="1" required><br><br>
Description:<textarea type="text" name="description" value=""></textarea><br><br>

<input type="submit" name="submit" value="submit">
</form>
        </fieldset>
        </div>
</body>
</html>

<?php 
extract($_POST);
if(isset($submit))
{
    
	 include "../includes/dbconnect.php";
	$qer="insert into products (name,price,status,description) values ('$name','$price','$status','$description')";
        
$res=mysqli_query($con,$qer);
if($res)
{
    header('location:view.php');
	
}
else{
	echo "inserting failed";
}
	}


?>
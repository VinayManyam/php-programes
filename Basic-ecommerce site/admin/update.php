<?php 
   include "../includes/ses.php";
   
if(empty($_SESSION['id']))
{
   header('location:index.php');
}?>
<html>
<title>Home</title>
<body>
    <div align="right">
<font size="5" color="green">Hi <?php echo $_SESSION['name'];?></font><br>
<a href="dashboard.php" style="text-decoration: none">dashboard</a><br>
<a href="../logout.php" style="text-decoration: none">logout</a>
</div>
    <?php
$id=$_GET['id'];
 
   include "../includes/dbconnect.php";
    $sql="SELECT * FROM products where pid='$id'";
    $res= mysqli_query($con, $sql);
    $row= mysqli_fetch_assoc($res);
    
?>
    <div align="center">
    <form method="post" action="">
        Name:<input type="text" name="name" value="<?php echo $row['name'];?>" required><br><br>
Price:<input type="text" name="price" value="<?php echo $row['price'];?>"  required><br><br>
Status:<input type="text" name="status"value="<?php echo $row['status'];?>"  required><br><br>
Description:<textarea type="text" name="description" value=""><?php echo $row['description'];?></textarea><br><br>

<input type="submit" name="submit" value="submit">
</form>
        </div>
</body>
</html>

<?php 
extract($_POST);
if(isset($submit))
{
    $id=$_GET['id'];
	 include "../includes/dbconnect.php";
	$qer="update products set name='$name',price='$price',status='$status',description='$description' where pid='$id'";
        
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
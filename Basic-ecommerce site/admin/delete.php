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
    $sql="DELETE FROM `products` WHERE pid='$id'";
    $res= mysqli_query($con, $sql);
if($res)
    header('location:view.php');
 else
     echo "something went wrong";
?>
    
</body>
</html>

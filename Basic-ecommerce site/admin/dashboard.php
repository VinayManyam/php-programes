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
    <div align="center">
<font size="7" color="green">Welcome to <?php echo $_SESSION['name'];?></font><br>
<br>
<a href="addnew.php" style="text-decoration: none">Add new product</a>
<br>
<a href="view.php" style="text-decoration: none">view products</a><br>
<a href="../logout.php" style="text-decoration: none">logout</a>

</div>
</body>
</html>
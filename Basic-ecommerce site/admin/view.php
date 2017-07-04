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
<a href="dashboard.php" style="text-decoration: none">dashboard</a><br>
<a href="../logout.php" style="text-decoration: none">logout</a>
</div>
    <?php 
    include "../includes/dbconnect.php";
    $sql="SELECT * FROM products";
    $res= mysqli_query($con, $sql);
    
$count= mysqli_num_rows($res);
    ?>
    <table align="center" border="1">
        <center> <h2>Products Details</h2></center>
        <tr><td>No</td><td>name</td><td>price</td><td>description</td><td>status</td><td>date</td><td>action</td></tr>
        <?php $i=1; 
        while($row= mysqli_fetch_assoc($res))
        {
            ?>
            <tr><td><?php echo $i;?></td><td><?php echo $row['name'];?></td><td><?php echo $row['price'];?></td><td><?php echo $row['description'];?></td><td><?php echo $row['status'];?></td><td><?php echo $row['time'];?></td>
                <td><a href="update.php?id=<?php echo $row['pid'];?>" style="text-decoration: none">update</a>|<a href="delete.php?id=<?php echo $row['pid'];?>" style="text-decoration: none">delete</a></td></tr>
            
            <?php     $i++; 
        }
            
       
            ?>
    </table>
</body>
</html>
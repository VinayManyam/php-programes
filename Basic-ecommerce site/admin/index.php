<html>
<title> Registration from</title>
<body>
<div align="center">
<h1>Admin login Form</h1>

<form method="POST" action="">
    <fieldset>
    <legend>please login to your Account</legend>
    Name:<input type="text" name="name" required><br><br>
    Password:<input type="password" name="password" required><br><br>

<input type="submit" name="submit" value="submit">
</fieldset>
</form>

</div>
</body>
</html>
<?php 
extract($_POST);
if(isset($submit))
{
    if(!empty($name)&&!empty($password)){
	include "../includes/dbconnect.php";
        include "../includes/ses.php";
$qer="select *from admin where uname='".addslashes(trim(strip_tags(ucfirst($name))))."'and upassword='".addslashes(trim(strip_tags(ucfirst($password))))."'";	
$res= mysqli_query($con, $qer);

if(mysqli_num_rows($res)>0)
{
    $data= mysqli_fetch_assoc($res);
    $_SESSION['id']=$data['uid'];
    $_SESSION['name']=$data['uname'];
    header('location:dashboard.php');
}
else
{
	echo "<center><h2><font color=\"red\" align=\"center\"><strong>Login Failed!</strong>user name or password incorrect,please tray again</font></h2></center>";
}
    } else {
    echo "please enter user name and password" ;    
    }
}
?>
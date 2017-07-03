<html>
<title>day3 </title>
<body>
<h1>functions</h1>
<h3><font color="blue">PHP function</font></h3>
<form method="post" action="#"	>
<input type="submit" name="submit" value="start">
</form>

<form method="post" action="#"	>
<input type="submit" name="submit2" value="start">
</form>

<form method="post" action="#"	>
<input type="submit" name="submit3" value="start">
</form>
<form method="post" action="#"	>
<input type="submit" name="submit4" value="start">
</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{

function hi()
{
 echo "welcome to php";
 $a=10;
 $b=20;
 echo $a+$b;
}
hi();
}
if(isset($_POST['submit2']))
{

function hi($a,$b)
{
 echo "welcome to php";

 echo $a+$b;
}
hi(10,30);
}

if(isset($_POST['submit3']))
{

function hi()
{
 echo "<br>welcome to php total:";
$a=30;
$b=40;
 echo $a+$b;
}
echo hi();
}

if(isset($_POST['submit4']))
{

function hi($a,$b)
{
 echo "<br>welcome to php total:";
 echo $a+$b;
}
echo hi(30,30);
}
?>

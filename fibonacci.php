<html>
<title>this is the hell </title>
<body>
<h1>welcome to naresh IT</h1>
<form method="post" action="#"	>
<input type="text" name="NO" >
<input type="submit" name="submit" value="numbers">
</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
$no = $_POST['NO'];

$a=1;$b=1;$c=0;
echo "<br>";
echo $a;
echo "<br>";
for($i=	1;$i<=$no;$i++)
{
	echo "<br>";
$c=$a+$b;
	echo $c;
$a=$b;
$b=$c;	
}
}





?>
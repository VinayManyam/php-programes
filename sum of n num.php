<html>
<title>day2</title>
<body>
<h1>switch operation</h1>
<form method="post" action="#"	>
<input type="text" name="a" >
<input type="text" name="b" value= "even">
<input type="submit" name="submit" value="numbers">
</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
$a = $_POST['a'];
$b = $_POST['b'];
if  ($b=="even")	{
	$i=0;
	while($a >=1)
	{
		$i=$i+2;
		$a--;
	}
	echo "sum = $i";
}
else
{
	{
	$i=1;
	while($a >=1)
	{
		$i=$i+2;
		$a--;
	}
	echo "sum = $i";
}
}
}

?>
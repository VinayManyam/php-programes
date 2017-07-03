<html>
<title>day2</title>
<body>
<h1>switch operation</h1>
<form method="post" action="#"	>
<input type="text" name="a" >
<input type="text" name="b" >
<input type="text" name="c" value="+" >
<input type="submit" name="submit" value="numbers">
</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
switch($c)
{
	case '+':
	$s=$a+$b;
	echo "a+b=$s";
	break;
	case '-':
	$s=$a-$b;
	echo "a-b=$s";
	break;
	case '/':
	$s=$a/$b;
	echo "a/b=$s";
	break;
	case '%':
	$s=$a%$b;
	echo "a%b=$s";
	break;
	case '*':
	$s=$a*$b;
	echo "a*b=$s";
	break;
}
	
}

?>
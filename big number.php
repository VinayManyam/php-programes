<html>
<title>day2</title>
<body>
<h1>biggest  number</h1>
<form method="post" action="#"	>
<input type="text" name="a" >
<input type="text" name="b" >
<input type="text" name="c" >
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
if ($a>$b && $a > $c)
{
	echo "$a is biggest number";
}
else if($b>$a && $b>$c)
{
	echo "$b is biggest number";
}
else{
	echo "$c is biggest number";
}
}

?>
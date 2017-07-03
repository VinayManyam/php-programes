<html>
<title>day2</title>
<body>
<h1>switch operation</h1>
<form method="post" action="#"	>
<input type="text" name="a" >
<input type="text" name="b" >
<input type="text" name="c" >
<input type="text" name="d" >
<input type="text" name="e" >
<input type="text" name="f" >
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
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];
$arr=array($a,$b,$c,$d,$e,$f);
print_r($arr);
$coun=count($arr);
$s=0;
for($i=0;$i<=$coun-1;$i++)
{
	if($arr[$i]%2==0)
	{
	echo $arr[$i]." ";
		$s=$s+$arr[$i];
	}
	
}
echo "<br>sum of even nos in array: $s ";
}

?>
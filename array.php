<html>
<title>day3 </title>
<body>
<h1>Arrays in php</h1>
<h3><font color="blue">Enter Array Elements:</font></h3>
<form method="post" action="#"	>
<input type="text" name="a" >
<input type="text" name="b" >
<input type="text" name="c" >
<input type="text" name="d" >
<input type="text" name="e" >
<input type="submit" name="submit" value="sumit">
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
$arr=array($a,$b,$c,$d,$e);
$coun=count($arr);
print_r($arr);
ECHO "<br><h3><font color=\"green\">Array Elements:</font></h3>";
for($i=0;$i<$coun;$i++)
{
	echo "  ".$arr[$i];
}

$s=0;
for($i=0;$i<$coun;$i++)
{
  $s=$s+$arr[$i];
}
echo "<br>sum of array elements:$s";


$s=0;
for($i=0;$i<$coun;$i++)
{
	if($arr[$i]%2==0)
	{
  $s=$s+$arr[$i];
	}
}
echo "<br>sum of even array elements:$s";
}
ECHO "<br><h3><font color=\"green\">Array Elements in revese order:</font></h3>";
for($i=$coun-1;$i>=0;$i--)
{
	echo "  ".$arr[$i];
}
$co=0;
for($i=0;$i<$coun;$i++)
{
	if($arr[$i]%2==0)
	{
$co++;
	}
}
echo "<br>even  elements count in array  :$co "
?>
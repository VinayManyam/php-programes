<html>
<title>day3 </title>
<body>
<h1>Arrays functions</h1>
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
$arr2=array('a','b','c','d','e');
$coun=count($arr);
print_r($arr);
echo "<br><h3><font color=\"green\">Array Elements:</font></h3>";
for($i=0;$i<$coun;$i++)
{
	echo "  ".$arr[$i];
}
sort($arr);
echo "<br>sort fuction result:";
print_r($arr);

rsort($arr);
echo "<br>rsort fuction result:";
print_r($arr);

asort($arr);
echo "<br>asort fuction result:";
print_r($arr);

arsort($arr);
echo "<br>arsort fuction result:";
print_r($arr);

ksort($arr);
echo "<br>ksort fuction result:";
print_r($arr);


 krsort($arr);
echo "<br>krsort fuction result:";
print_r($arr);

echo "<br>arry sum fuction result:".Array_sum($arr);
echo "<br>arry product fuction result:".Array_product($arr);
$rev=Array_reverse($arr);
echo "<br>";
print_r($rev);
echo "<br>"."array combine"."<br>";
$rev=Array_combine($arr2,$arr);
echo "<br>";
print_r($rev);
echo "<br> Array merge function <br>";
print_r(array_merge($arr,$arr2));


 }
?>
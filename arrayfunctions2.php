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

echo "<br> array push function here defult value 40 is pused to the array<br>";
array_push($arr,40);
print_r($arr);

echo "<br> array pop function<br>";
array_pop($arr);
print_r($arr);
 
 
echo "<br> array unshift function<br>";
array_unshift($arr,44);
print_r($arr);
echo "<br> array shift function<br>";
array_shift($arr);
print_r($arr);
echo "<br> array count elements function<br>";

print_r(array_count_values($arr));

//associative array
$ar=array_combine($arr2,$arr);
extract($ar);
echo "<br>";
print_r($ar);
echo "<br>".$a;

echo "<br> array keys:";
print_r(array_keys($ar));
echo "<br array values:>";
print_r(array_values($ar));

echo "<br> array key a is exits then Y:";
echo array_key_exists('a',$ar);

echo "<br>array search 22 element:";
echo array_search(22,$ar);

echo "<br>remove duplicate values";
print_r(array_unique($ar));

echo "<br>list function";
list($abc,$bcd)=array(15,25);
echo $abc;
echo "<br>".$bcd;

echo "<br>shuffle function :";
print_r($ar);
echo "<br>";
shuffle($ar);
print_r($ar);

$ex="vinay kumar manyam";
echo "<br>explode function ";
$exp=explode(" ",$ex);
print_r($exp);

echo "<br>implode function :";
echo implode(' ',$ar);


}
?>
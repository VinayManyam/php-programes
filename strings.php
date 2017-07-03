<html>
<title>day2</title>
<body>
<h1>string operation</h1>
<form method="post" action="#"	>
<input type="text" name="a" >
<input type="text" name="b" >

<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
$a = $_POST['a'];
$b = $_POST['b'];
echo  "<h2>$a</h2>";
echo "<br>postion of $b :".strpos($a,$b);
echo "<br>postion of $b from last:".strrpos($a,$b)."<br>";
$len="<br>".strlen($a);
echo "string $a lenth :$len<br>";
echo ucfirst($a);
echo "<br>";
echo ucwords($a);
echo "<br>";
echo strtoupper($a);
echo "<br>";
echo strtolower($a);
echo "<br>";
echo substr($a,2,3);
echo "<br>";
echo strstr($a,$b);
echo "<br>";
echo stristr($a,$b);
echo "<br>string revers:	".strrev($a);

echo "<br>".$a;
echo "<br>".str_repeat($a,3);
$trm=trim($a);
echo "<br>after triming string $a:".strlen($trm);
}

?>

<?php 
/*$str="welcomel";
echo strrpos($str,'l');*/
?>
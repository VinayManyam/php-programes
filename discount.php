<html>
<title>day2 </title>
<body>
<h1>Discount pro</h1>
<form method="post" action="#"	>
<input type="text" name="NO" >
<input type="text" name="dis"  >
<input type="submit" name="submit" value="numbers">
</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
$no = $_POST['NO'];
$dis = $_POST['dis'];
if(isset($_POST['dis']))
{
$dec=($no*$dis)/100;
$pay=$no-$dec;
echo "<h2><font color=\"green\">please pay: $pay</font></h2>";
}
else{
	echo "<h2><font color=\"green\">please pay: $no</font></h2>";
}
if( $no >1000 && $no < 5000)
{
	$dec=($no*20)/100;
$pay=$no-$dec;
echo "<h2><font color=\"green\">Bill:$no</font></h2>";
echo "<h2><font color=\"green\">HEE you got 20 % discount !!!!</font></h2>";
echo "<h2><font color=\"green\">please pay: $pay</font></h2>";	
}
else if($no >5000 && $no < 10000)
{
		$dec=($no*30)/100;
$pay=$no-$dec;
echo "<h2><font color=\"green\">Bill:$no</font></h2>";
echo "<h2><font color=\"green\">HEE you got 30 % discount !!!!</font></h2>";
echo "<h2><font color=\"green\">please pay: $pay</font></h2>";	
}
else if($no >10000)
{
		$dec=($no*40)/100;
$pay=$no-$dec;
echo "<h2><font color=\"green\">Bill:$no</font></h2>";
echo "<h2><font color=\"green\">HEE you got 40 % discount !!!!</font></h2>";
echo "<h2><font color=\"green\">please pay: $pay</font></h2>";	
}
}

?>
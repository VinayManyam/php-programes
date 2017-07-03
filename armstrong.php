<html>
<title>day2 </title>
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
for($j=1;$j<=$no;$j++)
{
$t=$j;
$d=0;$s=0;
while($t >= 1)
{
	$d=$t % 10 ;
	$s=$s+$d*$d*$d;
	$t=$t/10;
}
if($j==$s)
{
echo "<h2><font color=\"green\">$j=>$s is armstrong number</font></h2>";
}
}
}
?>
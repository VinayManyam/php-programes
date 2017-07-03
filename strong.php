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

$t=$no;
$s=0;

while($no >=1)
{
$j= $no % 10;
echo $j;
$f=1;
for($i=$j;$i>=1;$i--)
{
	$f=$f*$i;

	}
$s=$s+$f;
$no=$no/10;
}
echo "<br>total : ".$s."<br>";

if($t==$s)
{
	echo $t." is strong number";
}
else
{
	echo $t." is not a strong number";
}
}



?>
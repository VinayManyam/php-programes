<html>
<title>this is the hell </title>
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


for($j=2;$j<=$no;$j++)
{
	$c=0;
for($i=	1;$i<=$j;$i++)
{
	if($j % $i ==0)
	{
		$c++;
		}
}

	if($c==2)
	{
		echo "<br>";
		echo $j;	
	}
}
}

?>
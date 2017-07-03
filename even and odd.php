<html>
<title>day2</title>
<body>
<h1>even and odd numbers</h1>
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
echo "<h2><font color=\"red\">Even Numbers</font></h2>";
for($i=1;$i<=$no;$i++)
{
	
	if($i%2==0)
	{
		printf("%d		",$i);
		
	}
}
echo "<h2><font color=\"red\">Even Numbers</font></h2>";
for($i=1;$i<=$no;$i++)
{
	
	if($i%2!=0)
	{
		printf("%d		",$i);
		
	}
}
}

?>
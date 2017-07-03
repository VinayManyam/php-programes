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
for($i=1;$i<=$no;$i++)
{
	echo "<h2><font color=\"red\">Even Numbers</font></h2>";
	if($i%2==0)
	{
		echo "<h2><font color=\"green\">$i</font></h2>"."/t";
	}
}
}

?>
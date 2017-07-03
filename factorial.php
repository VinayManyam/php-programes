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

$s=1;
for($i=	1;$i<=$no;$i++)
{
	
	$s=$s*$i;
}
echo "factorial:";
echo $s;

}





?>
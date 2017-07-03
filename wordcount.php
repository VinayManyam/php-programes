<html>
<title>day3 </title>
<body>
<h1>word count</h1>
<h3><font color="blue">enter your passage:</font></h3>
<form method="post" action="#"	>
<input type="text" name="a" >

<input type="submit" name="submit" value="sumit">
</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
$a = $_POST['a'];
$arr=explode(" ",$a);
$coun=count($arr);
echo "<br>".$coun;
echo implode(" ",$arr);


}
?>
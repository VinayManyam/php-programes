<html>
<title>day3</title>
<body>
<h1>string operation</h1>
<form method="post" action="#"	>
<input type="text" name="a" >
<input type="text" name="b" >
<input type="text" name="c" >

<input type="submit" name="submit" value="submit">
</form>
<form method="post" action="#"	>
<input type="text" name="a" >


<input type="submit" name="submit2" value="submit">
</form>

<form method="post" action="#"	>
<input type="text" name="a" >
<input type="text" name="b" >

<input type="submit" name="submit3" value="add slashes at particular char">
</form>

<form method="post" action="#"	>
<input type="text" name="a" >
<input type="submit" name="submit4" value="remove html tags">
</form>
</body>
</html>
<?php 
if(isset($_POST['submit2']))
{
$a = $_POST['a'];

echo  "<h2>$a</h2>";
echo addslashes($a);
echo "<br>"."slashes removed here:".stripcslashes($a);
}
if(isset($_POST['submit']))
{
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
echo  "<h2>$a</h2>";
echo str_replace($c,$b,$a);
echo "<br>".str_ireplace($c,$b,$a);

}
if(isset($_POST['submit3']))
{
$a = $_POST['a'];
$b = $_POST['b'];
echo  "<h2>$a:$b</h2>";
echo addcslashes($a,$b);
echo "<br>"."slashes is removed here:".stripslashes($a);

}
if(isset($_POST['submit4']))
{
$a = $_POST['a'];
echo  "<h2>$a</h2>";
echo strip_tags($a);

}
?>

<html>
<title>day2 </title>
<body>
<h1>Discount pro</h1>
<form method="post" action="#"	>
<input type="text" name="NO" value="enter KM" >
<input type="submit" name="submit" value="numbers">
</form>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
$no = $_POST['NO'];
$m=$no*1000;
echo "<h2><font color=\"green\">meters:$m</font></h2>";
$cm=$m*100;
echo "<h2><font color=\"green\">centimeters:$cm</font></h2>";
$in=$cm/2.5;
echo "<h2><font color=\"green\">inches:$in</font></h2>";
$fe=$in/12;
echo "<h2><font color=\"green\">feet:$fe</font></h2>";
}
?>